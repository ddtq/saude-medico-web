<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Provider\UserAuthenticationProvider;
use Symfony\Component\Security\Core\User\UserChecker;

class ManagementMedicoController extends AbstractController
{
    /**
     * @Route("/medico/management", name="management_medico")
     */
    public function index()
    {
        try {
            //code...
            // // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO', null, 'User tried to access a page without having ROLE_ADMIN');
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO');
 
            return $this->render('management_medico/index.html.twig', [
                'controller_name' => 'ManagementMedicoController',   
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return new Response($th);
        }

    }
}
