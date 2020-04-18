<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class EmitirAtestadoAfastamentoController extends AbstractController
{
    /**
     * @Route("/medico/emitir/atestado/afastamento", name="emitir_atestado_afastamento")
     */
    public function index()
    {
        try {
            //code...
            // // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO', null, 'User tried to access a page without having ROLE_ADMIN');
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO');
 
            return $this->render('emitir_atestado_afastamento/index.html.twig', [
                'controller_name' => 'EmitirAtestadoAfastamentoController',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            throw new CustomUserMessageAuthenticationException("Faça Login novamente.");
        }
       
    }
}
