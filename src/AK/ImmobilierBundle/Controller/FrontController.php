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

class FrontController extends Controller
{
  
    public function viewBienAction()
    {
        $repository=$this
        ->getDoctrine ()
        ->getManager()
        ->getRepository('AKImmobilierBundle:Bien');
        
       
        $listBien=$repository->findAll();
        return $this->render('AKImmobilierBundle:Front:layout.html.twig', array(
            'biens'=>$listBien
        ));
       
       
    }
    public function etatBienAction(Bien $bien)
    {
        $em = $this->getDoctrine()
        ->getManager();
        if($bien->getEtat()==false)
        {
            $bien->setEtat(true);
        }
        else
        {
            $bien->setEtat(false);
        }
        $em->flush();
        return $this->redirectToRoute("ak_immobilier_homepage"); 

    }

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

//     public function reservateBienAction()
//     {
//         return $this->render('AKImmobilierBundle:Front:reservate_bien.html.twig', array(
//             // ...
//         ));
//     }

 

 }


