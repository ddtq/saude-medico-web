<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MedicoController extends AbstractController
{
    /**
     * @Route("/medico", name="medico")
     */
    public function index()
    {
        return $this->render('medico/index.html.twig', [
            'controller_name' => 'MedicoController',
        ]);
    }
}
