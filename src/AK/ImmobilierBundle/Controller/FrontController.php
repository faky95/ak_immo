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
use AK\ImmobilierBundle\Entity\Localite;
use AK\ImmobilierBundle\Form\LocaliteType;

class FrontController extends Controller
{
  
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
    // {
    //     $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Image');
    //     $local = $bienRepo->getImage();
    //   return $local;
    // }

  

//     public function searchBienAction(Request $request)
//     {
//         $bien=new Bien();
//         $localite=$request->get('localite');
//         $prix=$request->get('prixlocation');
//         $rechercher=$request->get('search');
        
             
//                         $repository=$this
//                         ->getDoctrine ()
//                         ->getManager()
//                         ->getRepository('AKImmobilierBundle:Bien');
                       
//                         $listBien=$repository->findAll();
    
//                         return $this->render('AKImmobilierBundle:Front:layout.html.twig', array(
//                             'biens'=>$listBien
//                              ));
                       
//                     if(isset($prix) && empty($localite))
//                     {
//                         $em=$this->getDoctrine()->getManager();
//                         $repository=$em->getRepository('FKImmoBundle:Bien');
//                         $query=$repository->createQueryBuilder('b')
//                                 ->where('b.prixlocation = :prixlocation')
//                                 ->setParameter('prixlocation',$prix)
//                                 ->orderBy('b.prixlocation', 'ASC')
//                                 ->getQuery();
//                                 $listBien=$query->getResult();
    
    
//                         return $this->render('FKImmoBundle:Front:search_bien.html.twig', array(
//                             'biens'=>$listBien
//                              ));
//                     }
    
//                     if(isset($prix) && empty($localite))
//                     {
//                         $em=$this->getDoctrine()->getManager();
//                         $repository=$em->getRepository('FKImmoBundle:Bien');
//                         $query=$repository->createQueryBuilder('b')
//                                 ->where('b.prixlocation = :prixlocation')
//                                 ->setParameter('prixlocation',$prix)
//                                 ->orderBy('b.prixlocation', 'ASC')
//                                 ->getQuery();
//                                 $listBien=$query->getResult();
    
    
//                         return $this->render('FKImmoBundle:Front:search_bien.html.twig', array(
//                             'biens'=>$listBien
//                              ));
//                     }
//                     if(empty($prix) && isset($localite))
//                     {
                        
//                     }
                     
                        
                    
//             }
                
              
        
    
//     }

    public function reservateBienAction()
    {
        return $this->render('AKImmobilierBundle:Front:reservate_bien.html.twig', array(
            // ...
        ));
    }

 

 }


