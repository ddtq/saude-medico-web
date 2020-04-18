<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class ObtainRowCosultasController extends AbstractController
{
    /**
     * @Route("/medico/obtain/row/cosultas", name="obtain_row_cosultas")
     */
    public function index()
    {
        try {
            //code...
            // // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO', null, 'User tried to access a page without having ROLE_ADMIN');
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO');
 
            return $this->render('obtain_row_cosultas/index.html.twig', [
                'controller_name' => 'ObtainRowCosultasController',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            throw new CustomUserMessageAuthenticationException("Faça Login novamente.");

        }
        
    }
}
