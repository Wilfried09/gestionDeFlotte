<?php

namespace App\Controller;

use App\Entity\Container;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContainerController extends AbstractController
{

    public function list()
    {
        $containers = $this->getDoctrine()
            ->getRepository(Container::class)
            ->findAll();

        return $this->render('container/list.html.twig',
            [
            'containers' => $containers,
            ]);
    }

    public function view($id)
    {
        $container = $this->getDoctrine()
        ->getRepository(Container::class)
        ->find($id);

        return $this->render('container/view.html.twig', [
            'container' => $container,
        ]);

    }
}
