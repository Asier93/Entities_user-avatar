<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AvatarsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvatarsRepository::class)]
#[ApiResource]
class Avatars
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Character = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    #[ORM\ManyToMany(targetEntity: Users::class, mappedBy: 'avatar')]
    private Collection $user;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharacter(): ?string
    {
        return $this->Character;
    }

    public function setCharacter(string $Character): static
    {
        $this->Character = $Character;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return Collection<int, Users>
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(Users $user): static
    {
        if (!$this->user->contains($user)) {
            $this->user->add($user);
            $user->addAvatar($this);
        }

        return $this;
    }

    public function removeUser(Users $user): static
    {
        if ($this->user->removeElement($user)) {
            $user->removeAvatar($this);
        }

        return $this;
    }
}
