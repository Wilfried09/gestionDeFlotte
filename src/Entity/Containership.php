<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
 * Containership
 *
 * @ORM\Table(name="containership")
=======
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734
 * @ORM\Entity(repositoryClass="App\Repository\ContainershipRepository")
 */
class Containership
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
     * @var string|null
     *
     * @ORM\Column(name="captain_name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $captainName = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="container_limit", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $containerLimit = 'NULL';
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
=======
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $captain_name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $container_limit;
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

    public function getCaptainName(): ?string
    {
<<<<<<< HEAD
        return $this->captainName;
    }

    public function setCaptainName(?string $captainName): self
    {
        $this->captainName = $captainName;
=======
        return $this->captain_name;
    }

    public function setCaptainName(?string $captain_name): self
    {
        $this->captain_name = $captain_name;
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734

        return $this;
    }

    public function getContainerLimit(): ?int
    {
<<<<<<< HEAD
        return $this->containerLimit;
    }

    public function setContainerLimit(?int $containerLimit): self
    {
        $this->containerLimit = $containerLimit;

        return $this;
    }


=======
        return $this->container_limit;
    }

    public function setContainerLimit(?int $container_limit): self
    {
        $this->container_limit = $container_limit;

        return $this;
    }
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734
}
