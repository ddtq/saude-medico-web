<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MedicoController extends AbstractController
{
    /**
     * @Route("/saudemedico", name="medico")
     */
    public function index()
    {
        // phpinfo();
        return $this->render('login/index.html.twig', [
            'controller_name' => 'MedicoController',
        ]);
    }
}
