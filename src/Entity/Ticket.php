<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'Tickets')]
    private ?Concert $concert = null;

    /**
     * @var Collection<int, TicketCat>
     */
    #[ORM\OneToMany(targetEntity: TicketCat::class, mappedBy: 'ticket', orphanRemoval: true)]
    private Collection $ticketCats;

    #[ORM\ManyToOne(inversedBy: 'ticket')]
    private ?Commande $commande = null;

    public function __construct()
    {
        $this->ticketCats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConcert(): ?Concert
    {
        return $this->concert;
    }

    public function setConcert(?Concert $concert): static
    {
        $this->concert = $concert;

        return $this;
    }

    /**
     * @return Collection<int, TicketCat>
     */
    public function getTicketCats(): Collection
    {
        return $this->ticketCats;
    }

    public function addTicketCat(TicketCat $ticketCat): static
    {
        if (!$this->ticketCats->contains($ticketCat)) {
            $this->ticketCats->add($ticketCat);
            $ticketCat->setTicket($this);
        }

        return $this;
    }

    public function removeTicketCat(TicketCat $ticketCat): static
    {
        if ($this->ticketCats->removeElement($ticketCat)) {
            // set the owning side to null (unless already changed)
            if ($ticketCat->getTicket() === $this) {
                $ticketCat->setTicket(null);
            }
        }

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): static
    {
        $this->commande = $commande;

        return $this;
    }
}
