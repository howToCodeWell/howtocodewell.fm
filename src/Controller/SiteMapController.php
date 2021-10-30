<?php

namespace App\Controller;

use App\SiteMap\Generator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteMapController extends AbstractController
{
    #[Route('/sitemap.{_format}', name: 'sitemap', requirements: ['_format' => 'xml'], format: 'xml')]
    public function index(Generator $siteMapGenerator): Response
    {
        return $this->render(
            'sitemap/index.xml.twig',
            [
                'urls' => $siteMapGenerator->generate()->getURLs()
            ]
        );
    }

}
