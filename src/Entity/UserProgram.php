<?php

namespace App\Entity;

use App\Repository\UserProgramRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserProgramRepository::class)
 */
class UserProgram
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $athlete;

    /**
     * @ORM\Column(type="date")
     */
    private $start;

    /**
     * @ORM\Column(type="date")
     */
    private $ending;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAthlete(): ?User
    {
        return $this->athlete;
    }

    public function setAthlete(?User $athlete): self
    {
        $this->athlete = $athlete;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnding(): ?\DateTimeInterface
    {
        return $this->ending;
    }

    public function setEnding(\DateTimeInterface $ending): self
    {
        $this->ending = $ending;

        return $this;
    }
}
