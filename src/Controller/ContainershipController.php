<?php
/**
 * Created by PhpStorm.
 * User: wilfried
 * Date: 19/12/18
 * Time: 14:41
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContainershipController extends AbstractController{
    private $containership_tab = [];

    /**
     * @Route("/containership", name="containership")
     */
    public function containership()
    {
        return $this->containership_tab;
    }

    /**
     * @Route("/containership/{id}", name="containershipId")
     */
    public function containershipId($id)
    {
        return $this->containership_tab[$id];
    }

}