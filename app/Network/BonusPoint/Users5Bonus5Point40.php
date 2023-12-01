<?php

namespace App\Network\BonusPoint;

class Users5Bonus5Point40 extends BonusPoint
{
    public function limitLevelUpline(): int
    {
        return 5;
    }

    protected function calculateRuleBonus(float $amount, int $levelUpline): float
    {
        return match ($levelUpline) {
            1 => $amount * 0.05,
            2 => $amount * 0.04,
            3 => $amount * 0.02,
            4 => $amount * 0.015,
            5 => $amount * 0.005,
            default => 0,
        };
    }

    protected function calculateRulePoints(float $amount, int $levelUpline): float
    {
        return $amount * 0.4;
    }
}
