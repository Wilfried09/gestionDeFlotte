<?php
/**
 * Created by PhpStorm.
 * User: wilfried
 * Date: 19/12/18
 * Time: 14:36
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContainerController extends AbstractController{
    private $container_tab = [];

    /**
     * @Route("/container", name="container")
     */
    public function container()
    {
        return $this->container_tab;
    }

    /**
     * @Route("/container/{id}", name="containerId")
     */
    public function containerId($id){
        return $this->container_tab[$id];
    }


}