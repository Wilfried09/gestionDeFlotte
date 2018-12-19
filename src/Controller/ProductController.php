<?php
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