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

class AdminController extends Controller
{

 public function contratAction(Request $request)
    {
         $em=$this->getDoctrine()->getManager();
         $listRes=$em->getRepository('AKImmobilierBundle:Reservation')->findAll();

         $em1 = $this->getDoctrine()->getManager();

        $Bien = $em1->getRepository('AKImmobilierBundle:Bien')->findAll();

          
         return $this->render('AKImmobilierBundle:Admin:contrat.html.twig', array('reserv'=>$listRes
        ));
    }




     public function ImageAction()
    {
        $bienRepo = $this->getDoctrine()->getManager()->getRepository('AKImmobilierBundle:Bien');
         $image = $bienRepo->findImage();
      return $image;
    }






    // public function validreservAction(Request $request, $id)
    // {
    //       $listRes=$this
    //      ->getDoctrine()
    //      ->getManager()
    //      ->getRepository('AKImmobilierBundle:Reservation')
    //      ->find($id);

    //     return $this->render('AKImmobilierBundle:Front:contrat.html.twig', array('reserv'=>$listRes
    //         // ...
    //     ));
    // }



}



   

