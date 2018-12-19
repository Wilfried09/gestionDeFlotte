<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
 * Product
 *
 * @ORM\Table(name="product")
=======
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
<<<<<<< HEAD
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
=======
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734
     */
    private $id;

    /**
<<<<<<< HEAD
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="length", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $length = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="width", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $width = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="height", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $height = 'NULL';

=======
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $length;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $width;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $height;
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(?int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

<<<<<<< HEAD
    public function setWidth(int $width): self
=======
    public function setWidth(?int $width): self
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }
}
