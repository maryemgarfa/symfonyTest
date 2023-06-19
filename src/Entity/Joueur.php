<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JoueurRepository::class)]
class Joueur
{
    #[ORM\Id]
    #[ORM\Column(length: 255)]
    private ?string $mat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(nullable: true)]
    private ?int $score = null;

    #[ORM\ManyToOne(inversedBy: 'joueurs')]
    private ?partie $partie = null;

    public function getMat(): ?string
    {
        return $this->mat;
    }
    public function setMat(?string $mat): static
    {
        $this->mat = $mat;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(?int $score): static
    {
        $this->score = $score;

        return $this;
    }

    public function getPartie(): ?partie
    {
        return $this->partie;
    }

    public function setPartie(?partie $partie): static
    {
        $this->partie = $partie;

        return $this;
    }
}
