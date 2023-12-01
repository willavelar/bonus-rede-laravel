<?php

namespace App\Network;

use App\Network\BonusPoint\BonusPoint;

class BonusPointCalculator
{
    private BonusPoint $bonusPoint;

    public function __construct(BonusPoint $bonusPoint)
    {
        $this->bonusPoint = $bonusPoint;
    }

    public function calcBonus(float $amount, int $level) : float
    {
        return $this->bonusPoint->calculateBonus($amount, $level);

    }

    public function calcPoint(float $amount, int $level) : float
    {
        return $this->bonusPoint->calculatePoints($amount, $level);

    }
}
