<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Provider\UserAuthenticationProvider;
use Symfony\Component\Security\Core\User\UserChecker;

class ManagementMedicoController extends AbstractController
{
    /**
     * @Route("/medico/management/medico", name="management_medico")
     */
    public function index()
    {
        
        return $this->render('management_medico/index.html.twig', [
            'controller_name' => 'ManagementMedicoController',   
        ]);
    }
}
