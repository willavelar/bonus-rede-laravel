<?php

namespace App\Network\BonusPoint;

abstract class BonusPoint
{
    public abstract function limitLevelUpline() : int;

    public function calculateBonus(float $amount, int $levelUpline) : float
    {
        if ($levelUpline > $this->limitLevelUpline()) {
            return 0;
        }

        return $this->calculateRuleBonus($amount, $levelUpline);
    }

    public function calculatePoints(float $amount, int $levelUpline) : int
    {
        if ($levelUpline > $this->limitLevelUpline()) {
            return 0;
        }

        return $this->calculateRulePoints($amount, $levelUpline);
    }

    protected abstract function calculateRuleBonus(float $amount, int $levelUpline) : float;

    protected abstract function calculateRulePoints(float $amount, int $levelUpline) : float;
}
