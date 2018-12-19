<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContainerRepository")
 */
class Container
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $color;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $container_model_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $containership_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getContainerModelId(): ?int
    {
        return $this->container_model_id;
    }

    public function setContainerModelId(?int $container_model_id): self
    {
        $this->container_model_id = $container_model_id;

        return $this;
    }

    public function getContainershipId(): ?int
    {
        return $this->containership_id;
    }

    public function setContainershipId(?int $containership_id): self
    {
        $this->containership_id = $containership_id;

        return $this;
    }
}
