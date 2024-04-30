<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, TicketCat>
     */
    #[ORM\OneToMany(targetEntity: TicketCat::class, mappedBy: 'commande')]
    private Collection $ticket;

    public function __construct()
    {
        $this->ticket = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, TicketCat>
     */
    public function getTicket(): Collection
    {
        return $this->ticket;
    }

    public function addTicket(TicketCat $ticket): static
    {
        if (!$this->ticket->contains($ticket)) {
            $this->ticket->add($ticket);
            $ticket->setCommande($this);
        }

        return $this;
    }

    public function removeTicket(TicketCat $ticket): static
    {
        if ($this->ticket->removeElement($ticket)) {
            // set the owning side to null (unless already changed)
            if ($ticket->getCommande() === $this) {
                $ticket->setCommande(null);
            }
        }

        return $this;
    }
}
