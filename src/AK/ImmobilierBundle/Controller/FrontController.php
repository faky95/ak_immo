<?php

namespace AK\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AK\ImmobilierBundle\Entity\Typebien;
use AK\ImmobilierBundle\Form\TypebienType;
use Symfony\Component\HttpFoundation\Response;
use AK\ImmobilierBundle\Entity\Bien;
use AK\ImmobilierBundle\Form\BienType;
use AK\ImmobilierBundle\Entity\Image;
<<<<<<< HEAD
use AK\ImmobilierBundle\Entity\Localite;
use AK\ImmobilierBundle\Form\LocaliteType;
=======
use AK\ImmobilierBundle\Entity\Client;
use AK\ImmobilierBundle\Form\ClientType;
use AK\ImmobilierBundle\Entity\Reservation;
>>>>>>> 18c4eeb6907d4175d04795bcc8b605fb449d141b

class FrontController extends Controller
{
  
<<<<<<< HEAD
    public function viewBienAction()
    {
        $em1 = $this->getDoctrine()->getManager();

        $Type = $em1->getRepository('AKImmobilierBundle:Typebien')->findAll();

        $em2 = $this->getDoctrine()->getManager();

       $Localite = $em2->getRepository('AKImmobilierBundle:Localite')->findAll();


        //$em = $this->getDoctrine()->getManager();
        $repository=$this
        ->getDoctrine ()
        ->getManager()
        ->getRepository('AKImmobilierBundle:Bien');
        
       
        $listBien=$repository->findAll();
        return $this->render('AKImmobilierBundle:Front:layout.html.twig', array(
             'biens' => $listBien,'types' => $Type,'localites' => $Localite
        // ...
    ));
       
       
    }
  
    public function searchBienAction(Request $request)
=======
    
public function viewBienAction()
{
    $em1 = $this->getDoctrine()->getManager();

    $Type = $em1->getRepository('AKImmobilierBundle:Typebien')->findAll();

    $em2 = $this->getDoctrine()->getManager();

   $Localite = $em2->getRepository('AKImmobilierBundle:Localite')->findAll();


    //$em = $this->getDoctrine()->getManager();
    $repository=$this
    ->getDoctrine ()
    ->getManager()
    ->getRepository('AKImmobilierBundle:Bien');
    
   
    $listBien=$repository->findAll();
    return $this->render('AKImmobilierBundle:Front:layout.html.twig', array(
         'biens' => $listBien,'types' => $Type,'localites' => $Localite
    // ...
));
   
   
}


    public function etatBienAction(Bien $bien)
>>>>>>> 18c4eeb6907d4175d04795bcc8b605fb449d141b
    {
    
        if( $request->isMethod('POST')) 
        {
            $localite=$request->get('localite');
            $typebien=$request->get('typebien');
            $prixlocation=$request->get('prixlocation');
            $rechercher=$request->get('rechercher');
            
            $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Bien');
            $biens = $bienRepo->findBiens($localite, $typebien, $prixlocation );

            return $this->render('AKImmobilierBundle:Front:search_bien.html.twig', array(
                'biens' => $biens
            // ...
            ));
        }     
    }
//     $em1 = $this->getDoctrine()->getManager();

//        $Type = $em1->getRepository('AkinaImmobilierBundle:TypeBien')->findAll();
// $em2 = $this->getDoctrine()->getManager();

//        $Localite = $em2->getRepository('AkinaImmobilierBundle:Localite')->findAll();


//         $em = $this->getDoctrine()->getManager();

//        $listeReservations = $em->getRepository('AkinaImmobilierBundle:Biens')->findAll();
//          $reservations  = $this->get('knp_paginator')->paginate(
//         $listeReservations,
//         $request->query->get('page', 1)/*le numéro de la page à afficher*/,
//           4/*nbre d'éléments par page*/
//     );
//         return $this->render('AkinaImmobilierBundle:Front:list.html.twig', array( 'reservations' => $reservations,'Type' => $Type,'Localite' => $Localite
//             // ...
//         ));
    // public function etatBienAction(Bien $bien)
    // {
    //     $em = $this->getDoctrine()
    //     ->getManager();
    //     if($bien->getEtat()==false)
    //     {
    //         $bien->setEtat(true);
    //     }
    //     else
    //     {
    //         $bien->setEtat(false);
    //     }
    //     $em->flush();
    //     return $this->redirectToRoute("ak_immobilier_homepage"); 

    // }

    public function localiteAction()
    {
        $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Bien');
        $local = $bienRepo->getLocalite();
      return $local;
    }

    public function ImageAction()
    {
       //$image=new Image();
        //$image=$bien->getImages();
        $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Bien');
         $image = $bienRepo->findImage();
      return $image;
    }

    public function typeAction()
    {
        $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Bien');
        $type = $bienRepo->gettype();
      return $type;
      
    }

<<<<<<< HEAD
   
    // public function Action()
    // {
    //     $repository=$this
    //     ->getDoctrine ()
    //     ->getManager()
    //     ->getRepository('AKImmobilierBundle:Typebien');
    //     $listType=$repository->findAll();
    //     return $this->render('AKImmobilierBundle:Front:type.html.twig', array(
    //         'types'=>$listType
    //     ));
       
       
    // }
    // public function viewImageAction()
    // {
    //     $repository=$this
    //     ->getDoctrine ()
    //     ->getManager()
    //     ->getRepository('AKImmobilierBundle:Image');
       
    //     $listImage=$repository->findAll();
    //     return $this->render('AKImmobilierBundle:Front:layout.html.twig', array(
    //         'images'=>$listImage
    //     ));
       
       
    // }
    // public function BienAction()
=======
    public function listBienAction()
    {
       //$image=new Image();
        //$image=$bien->getImages();
        $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Front:listBien.html.twig');
         $image = $bienRepo->findImage();
      return $image;
    }

    // public function reserverAction(Request $request,$id)
>>>>>>> 18c4eeb6907d4175d04795bcc8b605fb449d141b
    // {

    //     return $this->render('AKImmobilierBundle:Front:reserver.html.twig');
    // }

    public function searchBienAction(Request $request)
    {

        if( $request->isMethod('POST')) 
        {
            $localite=$request->get('localite');
            $typebien=$request->get('typebien');
            $prixlocation=$request->get('prixlocation');
            $rechercher=$request->get('rechercher');
            
            $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Bien');
            $biens = $bienRepo->findBiens($localite, $typebien, $prixlocation );

            return $this->render('AKImmobilierBundle:Front:search_bien.html.twig', array(
                'biens' => $biens
            // ...
            ));
        } 
    }
    public function reserverAction(Request $request,$id)
    {
         
       $em = $this->getDoctrine()->getManager();
       $listbien = $em->getRepository('AKImmobilierBundle:Bien')->find($id);
       $client = new Client();
       $form = $this->createForm(ClientType::class, $client);

       if ($request->isMethod('POST')) 
       {
           if (isset($_POST['submit']))
            {
               $user = $em->getRepository('AKImmobilierBundle:Client')
               ->findBy(['email' => $_POST['login'], 'motdepasse' => $_POST['password']]);
               if ($user) {
                   $reserve = new Reservation();
                   $reserve->setDateReservation(new \DateTime());
                   $reserve->setEtat(0);
                   $reserve->setClient($user);
                   $reserve->setBien($listbien);
                   $em->persist($reserve);
                   $em->flush();

                   return $this->render('AKImmobilierBundle:Front:confirm.html.twig');
               }
           } 
           else
            {
               $form->HandleRequest($request);
               if ($form->isValid()) 
               {
                   $em->persist($client);

                   $reserv = new Reservation();
                   $reserv->setDateReservation(new \DateTime());
                   $reserv->setEtat(0);
                   $reserv->setClient($client);
                   $reserv->setBien($listbien);
                   $em->persist($reserv);
                   $em->flush();
               }

               return $this->render('AKImmobilierBundle:Front:confirm.html.twig');
           }
       }

       return $this->render('AKImmobilierBundle:Front:reserver.html.twig', array(
           'biens' => $listbien, 'form' => $form->createView(),
       ));
   
  
            
          
            
        
        
<<<<<<< HEAD
    
//     }

    public function reservateBienAction()
    {
        return $this->render('AKImmobilierBundle:Front:reservate_bien.html.twig', array(
            // ...
        ));
=======
>>>>>>> 18c4eeb6907d4175d04795bcc8b605fb449d141b
    }

 

 }


