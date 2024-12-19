<?php

namespace App\Entity;

use App\Repository\NiveauRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NiveauRepository::class)]
class Niveau
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $cours = null;

    #[ORM\Column]
    private ?int $classe = null;

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

    public function getCours(): ?int
    {
        return $this->cours;
    }

    public function setCours(int $cours): static
    {
        $this->cours = $cours;

        return $this;
    }

    public function getClasse(): ?int
    {
        return $this->classe;
    }

    public function setClasse(int $classe): static
    {
        $this->classe = $classe;

        return $this;
    }
}
