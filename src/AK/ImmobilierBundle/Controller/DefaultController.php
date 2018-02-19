<?php

namespace AK\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AKImmobilierBundle:Default:index.html.twig');
    }

    public function reserverAction()
    {
        return $this->render('AKImmobilierBundle:Default:reserver.html.twig');
    }
    public function searchBienAction(Request $request)
    {
        $bien=new Bien();
        $localite=$request->get('localite');
        $prix=$request->get('prix');
        $rechercher=$request->get('rechercher');
        
     
        if(isset($rechercher))
        {
            if(empty($prix) && empty($localite))
            { 
                $repository=$this
                ->getDoctrine ()
                ->getManager()
                ->getRepository('FKImmoBundle:Bien');
               
                $listBien=$repository->findAll();

                return $this->render('FKImmoBundle:Front:search_bien.html.twig', array(
                    'biens'=>$listBien
                     ));
            }   
            if(isset($prix) && empty($localite))
            {
                $em=$this->getDoctrine()->getManager();
                $repository=$em->getRepository('AKImmobilierBundle:Bien');
                $query=$repository->createQueryBuilder('b')
                        ->where('b.prixlocation = :prixlocation')
                        ->setParameter('prixlocation',$prix)
                        ->orderBy('b.prixlocation', 'ASC')
                        ->getQuery();
                        $listBien=$query->getResult();


                return $this->render('AKImmobilierBundle:Front:search_bien.html.twig', array(
                    'biens'=>$listBien
                     ));
            }

            if(isset($prix) && empty($localite))
            {
                $em=$this->getDoctrine()->getManager();
                $repository=$em->getRepository('AKImmobilierBundle:Bien');
                $query=$repository->createQueryBuilder('b')
                        ->where('b.prixlocation = :prixlocation')
                        ->setParameter('prixlocation',$prix)
                        ->orderBy('b.prixlocation', 'ASC')
                        ->getQuery();
                        $listBien=$query->getResult();


                return $this->render('AKImmobilierBundle:Front:search_bien.html.twig', array(
                    'biens'=>$listBien
                     ));
            }
            if(empty($prix) && isset($localite))
            {
                
            }
             
                
            
        }
    }

}
