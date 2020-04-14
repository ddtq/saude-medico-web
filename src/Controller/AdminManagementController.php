<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminManagementController extends AbstractController
{
    /**
     * @Route("/admin/management", name="admin_management")
     */
    public function index()
    {
        try {
            //code...
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

            // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
            
            return $this->render('admin_management/index.html.twig', [
                'controller_name' => 'AdminManagementController',
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
