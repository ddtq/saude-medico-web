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
        return $this->render('admin_management/index.html.twig', [
            'controller_name' => 'AdminManagementController',
        ]);
    }
}
