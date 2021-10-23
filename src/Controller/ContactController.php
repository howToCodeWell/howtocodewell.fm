<?php

namespace App\Controller;

use App\Form\FeedbackType;
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

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(
        Request $request,
        MailerInterface $mailer,
        ParameterBagInterface $parameterBag,
        LoggerInterface $logger
    ): Response {
        $form = $this->createForm(FeedbackType::class);
        try {

            $form->handleRequest($request);
            $emailTo = $parameterBag->get('email_to');
            if (!is_string($emailTo)) {
                throw new Exception('Parameter email_to must be a string');
            }
            if (empty($emailTo)) {
                throw new Exception('Parameter email_to must not be empty');
            }

            if ($form->isSubmitted()) {
                $logger->info('Loading contact form has been submitted');
                if (!$form->isValid()) {
                    $this->addFlash('error', 'Please try again');

                    return $this->render(
                        'contact/index.html.twig',
                        [
                            'form' => $form->createView(),
                        ]
                    );
                }

                $data = $form->getData();
                $email = (new TemplatedEmail())
                    ->from($data['email'])
                    ->to($emailTo)
                    ->subject('New feedback')
                    ->textTemplate('emails/feedback.txt.twig')
                    ->context(
                        [
                            'feedback' => $data,
                        ]
                    );

                $mailer->send($email);
                $this->addFlash('success', 'Thank you, your feedback has been submitted');
                $form = $this->createForm(FeedbackType::class);
            }
        } catch (Exception | TransportExceptionInterface $exception) {
            $this->addFlash('error', 'Please try again');
            $logger->error('Error thrown during contact form submission', ['contact_form']);
            $logger->error($exception->getMessage(), ['contact_form']);
        }

        return $this->render(
            'contact/index.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

}
