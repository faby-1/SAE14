<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SAE14Controller extends AbstractController
{
    #[Route('/s/a/e14', name: 'app_s_a_e14')]
    public function index(): Response
    {
        return $this->render('sae14/index.html.twig', [
            'controller_name' => 'SAE14Controller',
        ]);
    }
}
