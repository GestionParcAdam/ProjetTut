<?php

/* 
 * Ca c'est ce qui va faire le lien entre nos routes/vues 
 */


/*
 * Les includes comme en Java 
 */
namespace GestionParcInfo\ParcInfoBundle\Controller;
use GestionParcInfo\ParcInfoBundle\Form\testForm;
use GestionParcInfo\ParcInfoBundle\Entity\Materiels;
use GestionParcInfo\ParcInfoBundle\Repository\MaterielsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {   
        /*
        *  Ici j'initilise la connexion à la base de donnée en clair (em = entityManager)
        */
        $em = $this->getDoctrine()->getManager();
        
        /*
         * Ici je demande au manager d'allez chercher le manager de materiels
         * Et de faire getMaterielsHS
         * En Symfony les manager de classe se nomme nomdelaclasseRepository 
         * Donc le get repository va chercher dans le bundle le repository correspondant à l'entité matériel
         * Pour la chercher dans matériel dans les annotations au début on a dit où se trouvait son repository
         */
        $materiels = $em->getRepository('ParcInfoBundle:Materiels')   
                       ->getMaterielsHS();
        
        
        /* Un if normal qui verrifie le contenu de la requete */
        if($materiels!=null)
        {
            /*
             * Ici je retourne un render (une vue)
             * Je dis que je vais utiliser la vu du bundle ParcInfoBundle se trouvant dans le dossier default 
             * Et pour nom de vue index.html.twig
             * Ensuite j'envoie à cette vue un tableau 
             * Qui contient l'objet de ma requete (ici une sorte de tableau)
             */
            return $this->render('ParcInfoBundle:Default:index.html.twig', array('materiels' => $materiels));
        }
        else {
            /*
             * Idem qu'au dessus sauf que la je renvoie un objet null qui permet de gérer ma vue twig
             */
            return $this->render('ParcInfoBundle:Default:index.html.twig', array('materiels' => null));
        }
    }
    
    public function ajouterAction()
    {    
        /* 
         * property pour un add entity : je dit quel champ (nom dans le fichier class example.php)
         * je veux afficher pour le select
         * 
         * widget => single_text pour un add date : je dis que le input sera un seul champ
         * input => datetime pour un add date : je dis le format de l'input
         * 
         * currency => false pour un add money : je dis de pas afficher la devise 
         * (car elle s'affiche en dehors de l'input (nous on placeholder))
         */
        
        $form = $this->createFormBuilder()
            ->add('typeMat', 'entity', array('class' => 'ParcInfoBundle:Type', 
                                             'property' => 'libelleType'))
            ->add('nomMat', 'text')
            ->add('etatMat', 'entity',array('class' => 'ParcInfoBundle:Etat', 
                                             'property' => 'libelleEtat'))
            ->add('statutMat', 'entity', array('class' => 'ParcInfoBundle:Statut', 
                                             'property' => 'libelleStatut'))
            ->add('siteGeo', 'entity', array('class' => 'ParcInfoBundle:Site', 
                                             'property' => 'nomSite'))
            ->add('dateAchat','date',array('input'  => 'datetime',
                                           'widget' => 'single_text'))
            ->add('prixAchat','money',array('currency' => 'false'))
            ->add('numFacture','text')
            ->add('modele','text')
            ->add('fabricant','text')
            ->add('revendeur','text')
            ->add('editeur','text')
            ->add('nomLog','text')
            ->add('licence','text')
            ->add('adMac','text')
            ->add('adIp','text')
            ->add('adPasserelle','text')
            ->add('dateGaranti','date',array('input'  => 'datetime',
                                           'widget' => 'single_text'))    
            ->add('ajouter', 'submit')
            ->getForm();
        
        /* 
        $form = $this->createForm(new testForm());
        
        return $this->render('GestionParcInfo:ParcInfoBundle:Default:index.html.twig', array('form' => $form));
        */
        
        /* Ici je créé un matériel
         * Et lui affecte des données grace au getters/setters de l'entité matériel
         */
        
        /*
        $materiel = new Materiels();
        $materiel->setMatNom('PC-Zizou');
        $date = new \DateTime();
        $date->setDate(2014, 12, 09);
        $materiel->setDateGarantie($date);
        $materiel->setNumAffecte(1);
        $materiel->setNumCarac(1);
        $materiel->setNumEtat(3);
        $materiel->setNumHistorique(1);
        $materiel->setNumSite(1);
        $materiel->setNumType(1);
        $materiel->setNumStatut(1);
        */
        /*
        *  Ici j'initilise la connexion à la base de donnée en clair (em = entityManager)
        */
        
        /*
        $em = $this->getDoctrine()->getManager();
        */
        
        /*
         * Ici je demande de faire persister dans la base l'objet créer
         * Persit + Flush
         */
        
        /*
            $em->persist($materiel);
            $em->flush();
        */
            return $this->render('ParcInfoBundle:Default:AjouterMateriel/ajouterMateriel.html.twig', array('form' => $form->createView()));
    }
    
    public function rechercherAction()
    {
        $form = $this->createFormBuilder()
            ->add('typeMat', 'entity', array('class' => 'ParcInfoBundle:Type', 
                                             'property' => 'libelleType'))
            ->add('nomMat', 'text')
            ->add('etatMat', 'entity',array('class' => 'ParcInfoBundle:Etat', 
                                             'property' => 'libelleEtat'))
            ->add('statutMat', 'entity', array('class' => 'ParcInfoBundle:Statut', 
                                             'property' => 'libelleStatut'))
            ->add('siteGeo', 'entity', array('class' => 'ParcInfoBundle:Site', 
                                             'property' => 'nomSite'))
            ->add('dateAchat','date',array('input'  => 'datetime',
                                           'widget' => 'single_text'))
            ->add('prixAchat','money',array('currency' => 'false'))
            ->add('numFacture','text')
            ->add('modele','text')
            ->add('fabricant','text')
            ->add('revendeur','text')
            ->add('utilisateur','text')     
            ->getForm();
        
        return $this->render('ParcInfoBundle:Default:RechercherMateriel/rechercherMateriel.html.twig', array('form' => $form->createView()));
    }
    
    public function matHSAction()
    {
       
       $em = $this->getDoctrine()->getManager();
       
       $materiels = $em->getRepository('ParcInfoBundle:Materiels')   
                       ->getMaterielsHS();
       
        
       return $this->render('ParcInfoBundle:Default:PopUp/affichePopUp.html.twig',array('materiels' => $materiels));
    }
}