<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonController extends AbstractController
{
    #[Route('/', name: 'app_mon')]
    public function index(): Response
    {
        return $this->render('mon/index.html.twig', [
            'controller_name' => 'MonController',
        ]);
    }

    #[Route('/cv', name: 'mon_cv')]
    public function cvv(): Response
    {
        return $this->render('autrespages/cv.html.twig', [
         
        ]);
    }

    #[Route('/loisir', name: 'mes_loisirs')]
    public function loiisir(): Response
    {
        return $this->render('autrespages/loisir.html.twig', [
         
        ]);
    }

    #[Route('/portfolio', name: 'mon_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('autrespages/portfolio.html.twig', [
         
        ]);
    }
}
