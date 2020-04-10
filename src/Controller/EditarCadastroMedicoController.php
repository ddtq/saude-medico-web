<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EditarCadastroMedicoController extends AbstractController
{
    /**
     * @Route("/editar/cadastro/medico/modify", name="editar_cadastro_medico")
     */
    public function index()
    {
        return $this->render('editar_cadastro_medico/index.html.twig', [
            'controller_name' => 'EditarCadastroMedicoController',
        ]);
    }
}
