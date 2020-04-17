<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Session\Session;

class SecurityControllerMedicoController extends AbstractController
{
    /**
     * @Route("/medico/access", name="app_medico_access")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        return $this->render('security/medico/login.html.twig', ["lastUsername"=>$lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/medico/logout", name="app_medico_logout")
     */
    public function logout(Request $request)
    {
        $response = new Response;
        foreach ($request->cookies as $cookiename => $value) {
            # code...
            $response->headers->clearCookie($cookiename);
            // echo $cookiename;
        }
        $session = new Session;
        $response = new Response;
        $session->clear();
        return $this->redirectToRoute('app_medico_access');
    }
}
