<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $professeur = null;

    #[ORM\Column]
    private ?int $module = null;

    #[ORM\Column]
    private ?int $classes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getProfesseur(): ?int
    {
        return $this->professeur;
    }

    public function setProfesseur(int $professeur): static
    {
        $this->professeur = $professeur;

        return $this;
    }

    public function getModule(): ?int
    {
        return $this->module;
    }

    public function setModule(int $module): static
    {
        $this->module = $module;

        return $this;
    }

    public function getClasses(): ?int
    {
        return $this->classes;
    }

    public function setClasses(int $classes): static
    {
        $this->classes = $classes;

        return $this;
    }
}
