<?php

namespace App\Entity;

use App\Repository\DiagnosticSubmissionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiagnosticSubmissionRepository::class)]
class DiagnosticSubmission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 50)]
    private ?string $mobile = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $vision = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $bottleneck = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $submittedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): static
    {
        $this->mobile = $mobile;
        return $this;
    }

    public function getVision(): ?string
    {
        return $this->vision;
    }

    public function setVision(?string $vision): static
    {
        $this->vision = $vision;
        return $this;
    }

    public function getBottleneck(): ?string
    {
        return $this->bottleneck;
    }

    public function setBottleneck(?string $bottleneck): static
    {
        $this->bottleneck = $bottleneck;
        return $this;
    }

    public function getSubmittedAt(): ?\DateTimeImmutable
    {
        return $this->submittedAt;
    }

    public function setSubmittedAt(\DateTimeImmutable $submittedAt): static
    {
        $this->submittedAt = $submittedAt;
        return $this;
    }
}
