<?php

namespace AK\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
<<<<<<< HEAD
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AK\ImmobilierBundle\Entity\Typebien;
use AK\ImmobilierBundle\Form\TypebienType;
use Symfony\Component\HttpFoundation\Response;
use AK\ImmobilierBundle\Entity\Bien;
use AK\ImmobilierBundle\Form\BienType;

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
=======
use snt\AKImmobilierBundle\Entity\Bien;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class FrontController extends Controller
{
<<<<<<< HEAD
    /**
=======
     /**
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda
     * @Route("/bien/reservation")
     */
    //commentaire de anta
    
    public function reserveBienAction()
    {
        return $this->render('AKImmobilierBundle:Front:reserve_bien.html.twig', array(
        ));
    }

    /**
     * @Route("/bien/search")
     */
    public function searchBienAction()
    {
<<<<<<< HEAD
=======

        $em=$this->getDoctrine()
        ->getManager();
        $searchs=$em->getRepository('sntimmoBundle:Bien')->findAll();
        if($request->isMethod("POST"))
        {
            
        }

>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda
        return $this->render('AKImmobilierBundle:Front:search_bien.html.twig', array(
            // ...
        ));
    }

}
>>>>>>> 54fad57818febd2e162c94e798b03fbe272cecff
