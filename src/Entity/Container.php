<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Container
 *
 * @ORM\Table(name="container", uniqueConstraints={@ORM\UniqueConstraint(name="container_id_uindex", columns={"id"})}, indexes={@ORM\Index(name="container_containership_id_fk", columns={"containership_id"}), @ORM\Index(name="container_container_model_id_fk", columns={"container_model_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ContainerRepository")
 */
class Container
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
     * @ORM\Column(name="color", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $color = 'NULL';

    /**
     * @var \ContainerModel
     *
     * @ORM\ManyToOne(targetEntity="ContainerModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="container_model_id", referencedColumnName="id")
     * })
     */
    private $containerModel;

    /**
     * @var \Containership
     *
     * @ORM\ManyToOne(targetEntity="Containership")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="containership_id", referencedColumnName="id")
     * })
     */
    private $containership;


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

    public function getContainerModel(): ?ContainerModel
    {
        return $this->containerModel;
    }

    public function setContainerModel(?int $containerModel): self
    {
        $this->containerModel = $containerModel;

        return $this;
    }

    public function getContainership(): ?Containership
    {
        return $this->containership;
    }

    public function setContainership(?int $containership): self
    {
        $this->containership = $containership;

        return $this;
    }

}
