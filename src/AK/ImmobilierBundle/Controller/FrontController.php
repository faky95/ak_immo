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
use AK\ImmobilierBundle\Entity\Client;
use AK\ImmobilierBundle\Form\ClientType;
use AK\ImmobilierBundle\Entity\Reservation;

class FrontController extends Controller
{
  
    public function viewBienAction(Request $request)
    {
        
             $em = $this->getDoctrine()->getManager();
            // $listbien = $em->getRepository('AKImmobilierBundle:Bien')->findAll();
            // $biens  = $this->get('knp_paginator')->paginate(
            //     $listbien,
            //     $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            //       6/*nbre d'éléments par page*/
            // );
    
            if ($request->isMethod('POST')) 
            {
                $localite=$request->get('localite');
                $typebien=$request->get('typebien');
               $prixmin=$request->get('prixmin');
                 $prixmax=$request->get('prixmax');
                if ($localite== '' && $typebien == '' ) 
                {
                    $listbien = $em->getRepository('AKImmobilierBundle:Bien')->findAll();
                   
                   
                } 
                else
                {
                    $listbien = $em->getRepository('AKImmobilierBundle:Bien')->findBien($localite, $typebien,$prixmin,$prixmax);
                    // $biens  = $this->get('knp_paginator')->paginate(
                    //     $listbien,
                    //     $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                    //       4/*nbre d'éléments par page*/
                    // );
                }
            }
            else 
            {
                $listbien = $em->getRepository('AKImmobilierBundle:Bien')->findAll();
              
                  // $biens  = $this->get('knp_paginator')->paginate(
                //     $listbien,
                //     $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                //       4/*nbre d'éléments par page*/
            }
            $listType = $em->getRepository('AKImmobilierBundle:TypeBien')->findAll();
            $listLocalite = $em->getRepository('AKImmobilierBundle:Localite')->findAll();
    
            return $this->render('AKImmobilierBundle:Front:layout.html.twig', array(
            'biens' => $listbien, 'types' => $listType, 'localites' => $listLocalite,
            ));
        
       
       
    }
  
    
  
        public function listBienAction(Request $request)
        {
            $repository=$this
            ->getDoctrine ()
            ->getManager()
            ->getRepository('AKImmobilierBundle:Bien');
            
           
            $listBien=$repository->findAll();
            $biens  = $this->get('knp_paginator')->paginate(
                $listBien,
                $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                  6/*nbre d'éléments par page*/
            );
                return $this->render('AKImmobilierBundle:Front:search_bien.html.twig', array(
                  'biens' => $biens,));
      
           
        }
        public function listLocaliteAction()
        {
            $repository=$this
            ->getDoctrine ()
            ->getManager()
            ->getRepository('AKImmobilierBundle:Localite');
            
           
            $listLocalite=$repository->findAll();
            return $this->render('AKImmobilierBundle:Front:localite.html.twig', array(
                 'localites' =>$listLocalite
            
        ));
           

        }
        public function listTypeAction()
        {
            $repository=$this
            ->getDoctrine ()
            ->getManager()
            ->getRepository('AKImmobilierBundle:Typebien');
            $type=$repository->findAll();
            return $this->render('AKImmobilierBundle:Front:type.html.twig', array(
                 'types' =>$type
            // ...
        ));
           

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
               ->findBy(['login' => $_POST['login'], 'password' => $_POST['password']]);
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
   
}


}