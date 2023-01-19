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

    #[Route('/programmeC', name: 'mon_progC')]
    public function programmeC(): Response
    {
        return $this->render('pageportfolio/programmationC.html.twig', [
         
        ]);
    }

      #[Route('/configueswt', name: 'mon_switch')]
    public function swt(): Response
    {
        return $this->render('pageportfolio/configueswt.html.twig', [
         
        ]);
    }

    #[Route('/ubuntu', name: 'mon_ubuntu')]
    public function ubuntu(): Response
    {
        return $this->render('pageportfolio/ubuntu.html.twig', [
         
        ]);
    }

    /* Route pour les pages en anglias */

    #[Route('/indexenglish', name: 'index_english')]
    public function indexenglish(): Response
    {
        return $this->render('pageanglais/indexanglais.html.twig', [
         
        ]);
    }
    #[Route('/portfolioenglish', name: 'portfolio_english')]
    public function portfolioenglish(): Response
    {
        return $this->render('pageanglais/portfolioanglais.html.twig', [
         
        ]);
    }
    #[Route('/cvenglish', name: 'cv_english')]
    public function cvenglish(): Response
    {
        return $this->render('pageanglais/cvanglais.html.twig', [
         
        ]);
    }
    #[Route('/loisirenglish', name: 'loisir_english')]
    public function loisirenglish(): Response
    {
        return $this->render('pageanglais/loisiranglais.html.twig', [
         
        ]);
    }
    
}
