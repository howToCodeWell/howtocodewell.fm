<?php

namespace App\Controller;

use App\Form\FeedbackType;
use App\Model\Feedback;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(
        Request $request
    ): Response {
        $feedback = new Feedback();
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $this->addFlash('success', 'Thank you, your feedback has been submitted');
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
