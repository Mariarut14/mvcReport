<?php

/**
 * This file is about class Room,
 * The class gets and sets values in database table room.
 *
 */

namespace App\Entity;

use App\Repository\RoomRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoomRepository::class)]
class Room
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $img = null;

    #[ORM\Column(length: 255)]
    private ?string $arrow_up = null;

    #[ORM\Column(length: 255)]
    private ?string $arrow_down = null;

    #[ORM\Column(length: 255)]
    private ?string $arrow_left = null;

    #[ORM\Column(length: 255)]
    private ?string $arrow_right = null;

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

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getArrowUp(): ?string
    {
        return $this->arrow_up;
    }

    public function setArrowUp(string $arrow_up): self
    {
        $this->arrow_up = $arrow_up;

        return $this;
    }

    public function getArrowDown(): ?string
    {
        return $this->arrow_down;
    }

    public function setArrowDown(string $arrow_down): self
    {
        $this->arrow_down = $arrow_down;

        return $this;
    }

    public function getArrowLeft(): ?string
    {
        return $this->arrow_left;
    }

    public function setArrowLeft(string $arrow_left): self
    {
        $this->arrow_left = $arrow_left;

        return $this;
    }

    public function getArrowRight(): ?string
    {
        return $this->arrow_right;
    }

    public function setArrowRight(string $arrow_right): self
    {
        $this->arrow_right = $arrow_right;

        return $this;
    }
}
