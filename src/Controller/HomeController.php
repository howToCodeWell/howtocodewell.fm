<?php

namespace App\Controller;

use App\Repository\EpisodeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home', methods: ['GET'])]
    public function index(EpisodeRepository $episodeRepository): Response
    {
        $shows = $episodeRepository->findAllOrderedByShowNumber();
        $latestShow = $episodeRepository->findLatest();

        return $this->render('home/index.html.twig', [
            'shows' => $shows,
            'latestShow' => $latestShow
        ]);
    }
}
