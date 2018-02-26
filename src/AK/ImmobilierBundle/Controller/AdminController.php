<?php

namespace AK\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AK\ImmobilierBundle\Entity\Reservation;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function reserveViewAction()
    {
        $em=$this->getDoctrine()->getManager();
        $listReserve=$em->getRepository('AKImmobilierBundle:Reservation')->findAll();
        return $this->render('AKImmobilierBundle:Admin:admin.html.twig', array(
          'reservations'=>$listReserve
        ));
    }
    public function detailAction(Request $request,$id)
    {
        
        $em = $this
        ->getDoctrine()
        ->getManager();

        $reservation= $em->getRepository('AKImmobilierBundle:Reservation')->find($id);
        return $this->render('AKImmobilierBundle:Admin:details.html.twig', array(
            'reservations'=> $reservation
        ));
    }

}
