<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Medico;
use App\Repository\MedicoRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityRepository\getEntityManager;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

class EditarCadastroMedicoController extends AbstractController
{
    /**
     * @Route("/editar/cadastro/medico/modify", name="editar_cadastro_medico")
     */
    public function index()
    {
        try {
            //code...
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');
            // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
            
            $ws = $this->getDoctrine()->getRepository(Medico::class);
            // return $this->json(['all: '=>$ws->findAll()]);
            // die();

            return $this->render('editar_cadastro_medico/index.html.twig', [
                'findAll' =>$ws->findAll(),
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

     /**
     * @Route("/admin/disableDoctor", name="admin_disableDoctor")
     */
    public function desabilityDoctor(){
        try {
            //code...
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');
            // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
            
            $entityManager = $this->getDoctrine()->getManager();
            $medico = $entityManager->getRepository(Medico::class)->find($_GET['desability']);
            if($medico->getAtivo() == true){
                $medico->setAtivo(false);
            }else{
                $medico->setAtivo(true);
            }
            $entityManager->flush();

            return $this->redirectToRoute('editar_cadastro_medico');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * @Route("/admin/cadastro/edit/user", name="admin_edit_user")
     */
    public function edit(){
        try {
            //code...
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');
            // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
            
            $entityManager = $this->getDoctrine()->getManager();
            $medico = $entityManager->getRepository(Medico::class)->find($_GET['user']);
            
            return $this->render('editar_cadastro_medico/edit.html.twig', ["medico"=>$medico]);

        } catch (\Throwable $th){
            throw $th;
        }
    }//edit

     /**
     * @Route("/admin/cadastro/update/user", name="admin_update_user")
     */
    public function update(Request $request, CsrfTokenManagerInterface $valid){
        try {
            //code...
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');
            // or add an optional message - seen by developers
            $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
            
            $csrf_token = new CsrfToken('authenticate', $request->request->get('csrf_token')); 

            if($request->isMethod('POST') && $valid->isTokenValid($csrf_token)){
                $entityManageruser = $this->getDoctrine()->getManager();
                $foundUser = $entityManageruser->getRepository(Medico::class)->find($request->request->get('iduser'));
                $foundUser->setNome($request->request->get('nome'));
                $foundUser->setCpf($request->request->get('cpf'));
                $foundUser->setRg($request->request->get('rg'));
                $foundUser->setCrm($request->request->get('crm'));
                $foundUser->setPhone1($request->request->get('phone1'));
                $foundUser->setPhone2($request->request->get('phone2'));
                $entityManageruser->flush();

                return $this->redirectToRoute('editar_cadastro_medico');
            }else{
                throw new Exception("Error Processing Request: not POST", 1);
            }
        } catch (\Throwable $th){
            throw $th;
        }
    }//edit

}
