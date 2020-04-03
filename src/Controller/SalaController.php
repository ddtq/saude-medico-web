<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class SalaController extends AbstractController
{
    /**
     * @Route("/sala", name="sala")
     */
    public function index(Request $request)
    { 

        $response = $request->getContent();

        return $this->json( $response);

 
        // return $this->render('sala/index.html.twig', [
        //     'controller_name' => 'SalaController',
        // ]);
    }
}
