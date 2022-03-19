<?php

namespace App\Entity;

use App\Repository\TrainingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TrainingRepository::class)
 */
class Training
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Exercise::class)
     */
    private $exercises;

    /**
     * @ORM\ManyToMany(targetEntity=MuscleGroup::class, inversedBy="trainings")
     */
    private $muscle_groups;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    public function __construct()
    {
        $this->exercises = new ArrayCollection();
        $this->muscle_groups = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Exercise>
     */
    public function getExercises(): Collection
    {
        return $this->exercises;
    }

    public function addExercise(Exercise $exercise): self
    {
        if (!$this->exercises->contains($exercise)) {
            $this->exercises[] = $exercise;
        }

        return $this;
    }

    public function removeExercise(Exercise $exercise): self
    {
        $this->exercises->removeElement($exercise);

        return $this;
    }

    /**
     * @return Collection<int, MuscleGroup>
     */
    public function getMuscleGroups(): Collection
    {
        return $this->muscle_groups;
    }

    public function addMuscleGroup(MuscleGroup $muscleGroup): self
    {
        if (!$this->muscle_groups->contains($muscleGroup)) {
            $this->muscle_groups[] = $muscleGroup;
        }

        return $this;
    }

    public function removeMuscleGroup(MuscleGroup $muscleGroup): self
    {
        $this->muscle_groups->removeElement($muscleGroup);

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
