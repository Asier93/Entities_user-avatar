<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[ApiResource]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Avatars::class, inversedBy: 'user')]
    private Collection $avatar;

    public function __construct()
    {
        $this->avatar = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Avatars>
     */
    public function getAvatar(): Collection
    {
        return $this->avatar;
    }

    public function addAvatar(Avatars $avatar): static
    {
        if (!$this->avatar->contains($avatar)) {
            $this->avatar->add($avatar);
        }

        return $this;
    }

    public function removeAvatar(Avatars $avatar): static
    {
        $this->avatar->removeElement($avatar);

        return $this;
    }
}

