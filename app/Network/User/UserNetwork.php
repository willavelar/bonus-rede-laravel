<?php

namespace App\Network\User;

class UserNetwork
{
    private int $id;
    private string $name;
    private bool $active;
    private ?UserNetwork $upline;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getUpline(): ?UserNetwork
    {
        return $this->upline;
    }

    public function setUpline(?UserNetwork $upline): void
    {
        $this->upline = $upline;
    }


}
