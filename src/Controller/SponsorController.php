<?php

namespace App\Controller;

use App\Form\FeedbackType;
use App\Model\Feedback;
use App\Repository\EpisodeRepository;
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

class SponsorController extends AbstractController
{
    #[Route('/sponsor', name: 'sponsor', methods: ['GET'])]
    public function index(): Response {

        return $this->render('sponsor/index.html.twig');
    }

}
