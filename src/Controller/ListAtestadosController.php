<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListAtestadosController extends AbstractController
{
    /**
     * @Route("/medico/list/atestados", name="list_atestados")
     */
    public function index()
    {
        try {
            //code...
            // // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO', null, 'User tried to access a page without having ROLE_ADMIN');
            $this->denyAccessUnlessGranted('ROLE_USER_MEDICO');
 
            return $this->render('list_atestados/index.html.twig', [
                'controller_name' => 'ListAtestadosController',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return new Response($th);
        }
       
    }
}
