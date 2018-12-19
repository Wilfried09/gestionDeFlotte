<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContainerProduct
 *
 * @ORM\Table(name="container_product", indexes={@ORM\Index(name="container_product_container_id_fk", columns={"container_id"}), @ORM\Index(name="container_product_product_id_fk", columns={"product_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ContainerProductRepository")
 */
class ContainerProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $quantity = 'NULL';

    /**
     * @var \Container
     *
     * @ORM\ManyToOne(targetEntity="Container")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="container_id", referencedColumnName="id")
     * })
     */
    private $container;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContainerId(): ?int
    {
        return $this->container_id;
    }

    public function setContainerId(?int $container_id): self
    {
        $this->container_id = $container_id;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    public function setProductId(?int $product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(?string $product): self
    {
        $this->product = $product;

        return $this;
    }
}
