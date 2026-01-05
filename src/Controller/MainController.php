<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function accueil(): Response
    {
        return $this->render('main/accueil.html.twig');
    }
        #[Route('/pourensavoirplus', name: 'pourensavoirplus')]
        public function pourensavoirplus(): Response
        {
        return $this->render('main/pourensavoirplus.html.twig');
        }
    }









