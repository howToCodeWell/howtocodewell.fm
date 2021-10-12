<?php

namespace App\Controller;

use App\Form\FeedbackType;
use App\Model\Feedback;
use Exception;
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
        ParameterBagInterface $parameterBag
    ): Response {
        $feedback = new Feedback();
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            if ($form->isValid()) {

                try {
                    $emailTo = $parameterBag->get('email_to');
                    if(!is_string($emailTo)){
                        throw new Exception('Parameter email_to must be a string');
                    }
                    if(empty($emailTo)){
                        throw new Exception('Parameter email_to must not be empty');
                    }
                    $this->addFlash('success', 'Thank you, your feedback has been submitted');

                    $email = (new TemplatedEmail())
                        ->from($feedback->getEmail())
                        ->to($emailTo)
                        ->subject('New feedback')
                        ->textTemplate('emails/feedback.txt.twig')
                        ->context([
                            'feedback' => $feedback
                        ]);

                    $mailer->send($email);
                } catch (Exception $exception) {
                    var_dump($exception->getMessage());
                } catch (TransportExceptionInterface $exception) {
                    var_dump($exception->getMessage());
                }
            } else {
                $this->addFlash('error', 'Please try again');
            }
        }

        return $this->render(
            'contact/index.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

}
