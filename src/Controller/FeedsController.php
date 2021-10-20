<?php

namespace App\Controller;

use App\Form\FeedbackType;
use App\Model\Feedback;
use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class FeedsController extends AbstractController
{
    #[Route('/rss', name: 'rss')]
    public function index(string $podcastRSSFeedURL): Response
    {
        $rssFeed = file_get_contents($podcastRSSFeedURL);

        return new Response($rssFeed, headers:[
            'Content-Type' => 'text/xml'
        ]);
    }

}
