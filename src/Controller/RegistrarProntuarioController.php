<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class RegistrarProntuarioController extends AbstractController
{
    /**
     * @Route("/medico/registrar/prontuario", name="registrar_prontuario")
     */
    public function index()
    {
        try {
            //code...
            // // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO', null, 'User tried to access a page without having ROLE_ADMIN');
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO');
 
            return $this->render('registrar_prontuario/index.html.twig', [
                'controller_name' => 'RegistrarProntuarioController',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            throw new CustomUserMessageAuthenticationException("Faça Login novamente.");
        }
       
    }
}
