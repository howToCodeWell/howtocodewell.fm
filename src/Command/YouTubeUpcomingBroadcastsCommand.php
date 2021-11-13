<?php

namespace App\Command;

use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Google\Exception as GoogleException;
use Google_Client;
use Google_Service_YouTube;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:youtube-upcoming-broadcasts',
    description: 'YouTube upcoming live broadcasts',
)]
class YouTubeUpcomingBroadcastsCommand extends Command
{
    const FILE_DIR = '/var/www/html/data';
    private EntityManagerInterface $entityManager;
    private Google_Client $googleClient;
    private SymfonyStyle $io;

    public function __construct(Google_Client $googleClient, EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->googleClient = $googleClient;
        parent::__construct('app:youtube-upcoming-broadcasts');
    }

    protected function configure(): void
    {
        $this->addOption('renew-token', null, InputOption::VALUE_OPTIONAL, 'Forces a new auth code to be requested');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->io = new SymfonyStyle($input, $output);
        $this->io->info('Running script');
        try {
            $this->setUpGoogleClient();
            $renewToken = $input->getOption('renew-token');

            $token = $this->getStoredAccessToken();
            if (empty($token) || ($renewToken === 'yes')) {
                $token = $this->renewToken();
                $this->saveToken($token);
            }

            $this->googleClient->setAccessToken($token);

            $this->io->info('Token has been set. Running query');


            $service = new Google_Service_YouTube($this->googleClient);
            $part = 'id,status,contentDetails';
            $query = [
                'broadcastStatus' => 'upcoming'
            ];
            $response = $service->liveBroadcasts->listLiveBroadcasts($part, $query);
            $items = $response->getItems();
            foreach ($items as $item) {
                $this->io->info('Broadcast ID: ' . $item->getId());
                $this->io->info('Broadcast Privacy Status: ' . $item->getStatus()->getPrivacyStatus());
            }
        } catch (Exception | GoogleException $exception) {
            $this->io->error($exception->getMessage());
        }

        // 1) Authenticate with YouTube
        // 2) Get the upcoming live broadcasts from the database
        // 3) Request upcoming live broadcasts from YouTube API
        // 4) If there is live broadcasts
        // 5) - IF live broadcast currently exists in the DB then update it's record
        // 6) - If the live broadcast doesn't exist in the DB then create a new record


        return Command::SUCCESS;
    }

    /**
     * @throws GoogleException
     * @throws Exception
     */
    protected function setUpGoogleClient(): void
    {
        $file = self::FILE_DIR . '/googleusercontent.com.json';
        if (!file_exists($file)) {
            throw new Exception('googleusercontent.com.json is missing');
        }
        $this->googleClient->setApplicationName('Test');
        $this->googleClient->setScopes([
            'https://www.googleapis.com/auth/youtube.readonly',
        ]);
        $this->googleClient->setAuthConfig($file);
    }

    protected function getStoredAccessToken(): ?array
    {
        $tokenData = null;
        $file = self::FILE_DIR . '/google_token.txt';
        if (file_exists($file)) {
            $fileContents = file_get_contents($file);
            if ($fileContents === false) {
                $this->io->error('File does not contain data');
                return null;
            }
            $tokenData = (array)json_decode($fileContents, true);
        }
        return $tokenData;
    }

    /**
     * @throws Exception
     */
    protected function renewToken(): array
    {
        $authUrl = $this->googleClient->createAuthUrl();
        $this->io->info('Please go to ' . $authUrl);
        $question = new Question('Please enter the auth code?');
        $authCode = $this->io->askQuestion($question);
        $tokenResponse = $this->getAccessTokenFromAuthCode($authCode);
        if ($tokenResponse === null) {
            throw new Exception('Token response is null');
        }
        return $tokenResponse;
    }

    protected function getAccessTokenFromAuthCode(string $authCode): ?array
    {
        $tokenResponse = $this->googleClient->fetchAccessTokenWithAuthCode($authCode);
        if (isset($tokenResponse['error']) && isset($tokenResponse['error_description'])) {
            $this->io->error($tokenResponse['error']);
            $this->io->error($tokenResponse['error_description']);
            return null;
        }

        return $tokenResponse;
    }

    protected function saveToken(array $token): void
    {
        $file = self::FILE_DIR . '/google_token.txt';
        file_put_contents($file, json_encode($token));
    }
}


