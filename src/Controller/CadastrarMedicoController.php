<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CadastrarMedicoController extends AbstractController
{
    /**
     * @Route("/cadastrar/medico/newdoctor", name="cadastrar_medico")
     */
    public function index()
    {
        return $this->render('cadastrar_medico/index.html.twig', [
            'controller_name' => 'CadastrarMedicoController',
        ]);
    }
}
