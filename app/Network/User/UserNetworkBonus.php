<?php

namespace App\Network\User;

class UserNetworkBonus
{
    private UserNetwork $user;
    private float $bonus;
    private int $point;

    public function getUser(): UserNetwork
    {
        return $this->user;
    }

    public function setUser(UserNetwork $user): void
    {
        $this->user = $user;
    }

    public function getBonus(): float
    {
        return $this->bonus;
    }

    public function setBonus(float $bonus): void
    {
        $this->bonus = $bonus;
    }

    public function getPoint(): int
    {
        return $this->point;
    }

    public function setPoint(int $point): void
    {
        $this->point = $point;
    }


}
