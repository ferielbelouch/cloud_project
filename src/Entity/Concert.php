<?php

namespace App\Entity;

use App\Repository\ConcertRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConcertRepository::class)]
class Concert
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $StartAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $EndAt = null;

    #[ORM\Column(length: 255)]
    private ?string $Type = null;

    #[ORM\OneToMany(targetEntity: Ticket::class, mappedBy: 'concert')]
    private Collection $Tickets;

    public function __construct()
    {
        $this->Tickets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getStartAt(): ?\DateTimeImmutable
    {
        return $this->StartAt;
    }

    public function setStartAt(\DateTimeImmutable $StartAt): static
    {
        $this->StartAt = $StartAt;

        return $this;
    }

    public function getEndAt(): ?\DateTimeImmutable
    {
        return $this->EndAt;
    }

    public function setEndAt(\DateTimeImmutable $EndAt): static
    {
        $this->EndAt = $EndAt;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * @return Collection<int, Ticket>
     */
    public function getTickets(): Collection
    {
        return $this->Tickets;
    }

    public function addTicket(Ticket $ticket): static
    {
        if (!$this->Tickets->contains($ticket)) {
            $this->Tickets->add($ticket);
            $ticket->setConcert($this);
        }

        return $this;
    }

    public function removeTicket(Ticket $ticket): static
    {
        if ($this->Tickets->removeElement($ticket)) {
            // set the owning side to null (unless already changed)
            if ($ticket->getConcert() === $this) {
                $ticket->setConcert(null);
            }
        }

        return $this;
    }
}
