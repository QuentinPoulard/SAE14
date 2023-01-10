<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonController extends AbstractController
{
    #[Route('/mon', name: 'app_mon')]
    public function index(): Response
    {
        return $this->render('mon/index.html.twig', [
            'controller_name' => 'MonController',
        ]);
    }

    #[Route('/', name: 'mon_cv')]
    public function cvv(): Response
    {
        return $this->render('autrespages/cv.html.twig', [
         
        ]);
    }

    #[Route('/loisir', name: 'mes_loisir')]
    public function loiisir(): Response
    {
        return $this->render('autrespages/loisir.html.twig', [
         
        ]);
    }
}
