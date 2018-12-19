<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContainerModel
 *
 * @ORM\Table(name="container_model")
 * @ORM\Entity(repositoryClass="App\Repository\ContainerModelRepository")
 */
class ContainerModel
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

    public function setWidth(int $width): self
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
