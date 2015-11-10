<?php

namespace bundlePPEMission2\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use bundlePPEMission2\BootstrapBundle\Entity\Utilisateur;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:index.html.twig', array('name' => $name));
    }
    public function accueilAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:accueil.html.twig');
    }

    public function servicesAction()
    {
         $doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getManager();
        $repository=$entityManager->getRepository('bundlePPEMission2BootstrapBundle:Service');
        $lesServices=$repository->findAll();
        return $this->render('bundlePPEMission2BootstrapBundle:Default:services.html.twig',array('lesServices'=>$lesServices));
    }
    public function personnelAction()
    {
        $doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getManager();
        $repository=$entityManager->getRepository('bundlePPEMission2BootstrapBundle:Medecin');
        $lesMedecins=$repository->findAll();

        return $this->render('bundlePPEMission2BootstrapBundle:Default:personnel.html.twig',array('lesMedecins'=>$lesMedecins));
    }
    
    public function horairesAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:horaires.html.twig');
    }
    public function planAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:plan.html.twig');
    }
    public function infosAction()
    {
        return $this->render('bundlePPEMission2BootstrapBundle:Default:infos.html.twig');
    }
     public function modifMedecinAction(Request $request)
    {
        $id=$request->query->get('id');
        $entityManager=$this->getDoctrine()->getManager();
        $repository=$entityManager->getRepository('bundlePPEMission2BootstrapBundle:Medecin');
        $unMedecin=$repository->find($id);
        $formBuilder=$this->createFormBuilder($unMedecin);
        $formBuilder->add('nom','text',array('label'=>'Modifier le nom du médecin'));
        $formBuilder->add('prenom','text',array('label'=>'Modifier le prénom du médecin'));
        $formBuilder->add('telephone','text',array('label'=>'Modifier le téléphone du médecin'));
        $form=$formBuilder->getForm();
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $entityManager=$this->getDoctrine()->getManager();
                $entityManager->persist($unMedecin);
                $entityManager->flush();
            }
        }
        return $this->render('bundlePPEMission2BootstrapBundle:Default:modifMedecin.html.twig',array('form'=>$form->createView()));
    }
    public function modifServiceAction(Request $request)
    {
        $id=$request->query->get('id');
        $entityManager=$this->getDoctrine()->getManager();
        $repository=$entityManager->getRepository('bundlePPEMission2BootstrapBundle:Service');
        $unService=$repository->find($id);
        $formBuilder=$this->createFormBuilder($unService);
        $formBuilder->add('intitule','text',array('label'=>'Modifier le nom du service'));
        $formBuilder->add('numero','text',array('label'=>'Modifier le numéro du médecin'));
        $form=$formBuilder->getForm();
        if($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $entityManager=$this->getDoctrine()->getManager();
                $entityManager->persist($unService);
                $entityManager->flush();
            }
        }
        return $this->render('bundlePPEMission2BootstrapBundle:Default:modifService.html.twig',array('form'=>$form->createView()));
    }
    public function loginAction()
    {
        
        $entityManager=$this->getDoctrine()->getManager();
        $repository=$entityManager->getRepository('bundlePPEMission2BootstrapBundle:Utilisateur');
        $unUtilisateur=$repository->findAll();

        $formBuilder=$this->createFormBuilder($unUtilisateur);
        $formBuilder->add('login','text',array('label'=>'Login'));
        $formBuilder->add('motDePasse','text',array('label'=>'Mot de passe'));
        $formBuilder->add('Se Connecter','submit');
        $form=$formBuilder->getForm();

        
        return $this->render('bundlePPEMission2BootstrapBundle:Default:login.html.twig',array('form'=>$form->createView()));
        
        
        
    }
    
    public function creationAction(Request $request)
    {
        
        $unUtilisateur=new Utilisateur();
        $formBuilder=$this->createFormBuilder($unUtilisateur);
        $formBuilder->add('login','text',array('label'=>'Login'));
        $formBuilder->add('motDePasse','text',array('label'=>'Mot de passe'));
        $formBuilder->add('Creation','submit');
        $form=$formBuilder->getForm();
        
        if($request->getMethod()=='POST')
          
          $form->bind($request);
          if($form->isValid())
           {
        $entityManager=$this->getDoctrine()->getManager();
        $entityManager->persist($unUtilisateur);
        $entityManager->flush();
            }
        
         
            
            
        
        return $this->render('bundlePPEMission2BootstrapBundle:Default:creation.html.twig',array('form'=>$form->createView()));
        
        
        
    }
    
}
