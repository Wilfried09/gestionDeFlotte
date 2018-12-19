<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

    /**
     * @Route("/", name="racine")
     */
<<<<<<< HEAD
    public function index(){
        $var= new ContainerController();
=======
    public function index()
    {
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
