<?php
/**
 * Created by PhpStorm.
 * User: wilfried
 * Date: 19/12/18
 * Time: 14:41
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContainershipController extends AbstractController{

    public function list()
    {
        return $this->render('containership/list.html.twig', [
            'controller_name' => 'ContainershipController',
        ]);
    }

    public function view()
    {
        return $this->render('containership/view.html.twig', [
            'controller_name' => 'ContainershipController',
        ]);
    }

}