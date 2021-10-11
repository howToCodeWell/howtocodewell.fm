<?php

namespace App\Controller;

use App\Repository\EpisodeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
    #[Route('/{show}', name: 'show', requirements: ['show' => '\d+'])]
    public function index(EpisodeRepository $episodeRepository, Request $request): Response
    {
        $show = $episodeRepository->findOneBy([
           'showNumber' => $request->get('show')
        ]);
        return $this->render(
            'show/index.html.twig',
            [
                'show' => $show
            ]
        );
    }

    #[Route('/archive/{page}', name: 'archive', requirements: ['page' => '\d+'], defaults: ['page' => 1])]
    public function archive(EpisodeRepository $episodeRepository, Request $request): Response
    {
        $page = $request->get('page', 1);
        $limit = 10;
        $pagination = $episodeRepository->findAllOrderedByShowNumber($page, $limit);
        return $this->render(
            'show/archive.html.twig',
            [
                'pagination' => $pagination
            ]
        );
    }
}
