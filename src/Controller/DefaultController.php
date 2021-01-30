<?php

namespace App\Controller;

use App\Clases\Datos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
     /**
         * @Route("/")
         */
    function mainPage(){

        
        return $this->render('base.html.twig');
    }

     /**
         * @Route("/characters")
         */
        function charPage(){

            $dt = new Datos();
            return $this->render('characters.html.twig', ['characters' => $dt->getCharacters()]);
        }

         /**
         * @Route("/houses")
         */
        function famPage(){

       
            $dt = new Datos();
            return $this->render('families.html.twig', ['houses' => $dt->getHouses()]);
        }
         /**
         * @Route("/locations")
         */
       
}