<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Logout\LogoutHandlerInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/admin/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // phpinfo();
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }
 
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/index.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(Request $request, Response $response, TokenInterface $token)
    {
        foreach ($this->cookies as $cookieName => $cookieData) {
            $response->headers->clearCookie($cookieName, $cookieData['path'], $cookieData['domain'], isset($cookieData['secure']) ? $cookieData['secure'] : false, true, isset($cookieData['samesite']) ? $cookieData['samesite'] : null);
        }
        return $this->redirectToRoute('/admin/login');
        // throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
