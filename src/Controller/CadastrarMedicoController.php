<?php

namespace App\Controller;

use App\Entity\Medico;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManager;

class CadastrarMedicoController extends AbstractController
{
    /**
     * @Route("/cadastrar/medico/newdoctor", name="cadastrar_medico")
     */
    public function index()
    {
        try {
            //code...
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

            // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
            
            return $this->render('cadastrar_medico/index.html.twig', [
                'controller_name' => 'CadastrarMedicoController',
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }//index()

    /**
     * @Route("/admin/doctor/create", name="new_doctor")
     */
    public function create(Request $request, CsrfTokenManagerInterface $validToken)
    {
        $token = new CsrfToken('authenticate', $request->request->get('csrf_token'));          
        if( 'new_doctor' === $request->attributes->get('_route') && $request->isMethod("POST") && $validToken->isTokenValid($token) ) 
            return $this->persistNewDoctor($request);
        else{
            throw new Exception("Error Processing Request", 1);
        }
        
    }//index()

    private function persistNewDoctor(Request $request)
    {
        if(
            $ver = (   (empty($request->request->get('nome'))) || (empty($request->request->get('rg'))) 
            || (empty($request->request->get('passwd'))) || (empty($request->request->get('phone1')))
            || (empty($request->request->get('confirmPasswd'))) || (empty($request->request->get('crm')))
            || (empty($request->request->get('cpf')))
            )
        )
        {
            $resp = new Response(
                'Content',
                Response::HTTP_CREATED,
                ['content-type' => 'text/html']
            );
            return $resp->setContent('<h1> error: Encontrado campo vazio ! </h1>');
        }else{
            if( $request->request->get('passwd') === $request->request->get('confirmPasswd') ){
                try {
                    //code...
                    $entityManager = $this->getDoctrine()->getManager();
                    $medico = new Medico();
                    $medico->setAtivo(true);
                    $medico->setCpf($request->request->get('cpf'));
                    $medico->setNome($request->request->get('nome'));
                    $medico->setRg($request->request->get('rg'));
                    $medico->setCrm($request->request->get('crm'));
                    $medico->setPhone1($request->request->get('phone1'));
                    $medico->setPhone2($request->request->get('TELEFONE'));
                    $medico->setPassword($request->request->get('passwd'));
                    $entityManager->persist($medico);
                    $entityManager->flush();

                    return $this->render('/cadastrar_medico/confirm.html.twig', ["medico"=>$medico]);
                    // return $this->json(["message: "=>"Salvo com sucesso no banco - ", "data: "=>$request->request->all()]);
                } catch (\Throwable $th) {
                    throw $th;
                }
            }else{
                // return $this->json(["message"=> "senha não iguais"]);
                $resp = new Response(
                    'Content',
                    Response::HTTP_CREATED,
                    ['content-type' => 'text/html']
                );
                return $resp->setContent('<h1> Password: Senhas não coincidem ! </h1>');
            }
        }
    }
}
