<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class BuscaPacienteTriagemController extends AbstractController
{
    /**
     * @Route("/medico/busca/paciente/triagem", name="busca_paciente_triagem")
     */
    public function index()
    {
        try {
            //code...
            // // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO', null, 'User tried to access a page without having ROLE_ADMIN');
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO');
 
            return $this->render('busca_paciente_triagem/index.html.twig', [
                'controller_name' => 'BuscaPacienteTriagemController',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            throw new CustomUserMessageAuthenticationException("Faça Login novamente.");
        }
        
    }
}
