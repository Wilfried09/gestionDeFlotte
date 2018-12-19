<?php
<<<<<<< HEAD

namespace App\Controller;
use App\Entity\Product;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    public function list()
    {
        $products = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();

        return $this->render('product/list.html.twig',
            [
                'products' => $products,
            ]);
    }

    public function view($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);

        return $this->render('product/view.html.twig', [
            'product' => $product,
        ]);

    }
}
=======
/**
 * Created by PhpStorm.
 * User: wilfried
 * Date: 19/12/18
 * Time: 14:40
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController{
    private $product_tab = [];

    /**
     * @Route("/product/", name="product")
     */
    public function product()
    {
        return $this->product_tab;
    }

    /**
     * @Route("/product/{id}", name="productId")
     */
    public function productId($id)
    {
        return $this->product_tab[$id];
    }

}
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734
