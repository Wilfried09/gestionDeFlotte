<?php

namespace App\Controller;

use App\Entity\Containership;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContainerShipController extends AbstractController
{

    public function list()
    {
        $containerships = $this->getDoctrine()
            ->getRepository(Containership::class)
            ->findAll();

        return $this->render('container/ship/list.html.twig',
            [
                'containerships' => $containerships,
            ]);
    }

    public function view($id)
    {
        $containership = $this->getDoctrine()
            ->getRepository(Containership::class)
            ->find($id);

        return $this->render('container/ship/view.html.twig', [
            'containership' => $containership,
        ]);

    }
}
