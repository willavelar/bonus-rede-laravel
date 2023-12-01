<?php

namespace App\Network;

use App\Network\BonusPoint\BonusPoint;
use App\Network\BonusPoint\Users5Bonus5Point40;

class BonusPointFacade
{
    private BonusPoint $rule;
    private float $amount;
    private array $users;

    public function __construct(float $amount, array $users)
    {
        $this->rule = new Users5Bonus5Point40();
        $this->amount = $amount;
        $this->users = $users;
    }

    public function apply() : array
    {
        $level = 1;
        $usersBonus = [];

        foreach ($this->users as $user) {
            $this->applyCalc($user, $level, $usersBonus);
        }

        return $usersBonus;
    }

    private function applyCalc($user, &$level, array &$usersBonus) : void
    {
        if ($level > $this->rule->limitLevelUpline()) {
            return;
        }

        if (!$user['active']) {
            return;
        }

        $bonusCalculator = new BonusPointCalculator($this->rule);

        $bonus = $bonusCalculator->calcBonus($this->amount, $level);
        $point = $bonusCalculator->calcPoint($this->amount, $level);

        $usersBonus[] = [
            'name' =>  $user['name'],
            'bonus' => $bonus,
            'point' => $point
        ];

        ++$level;

        if ($user['upline'] && $userUpline = $this->getUpline($user)) {
           $this->applyCalc($userUpline, $level,$usersBonus);
        }
    }

    private function getUpline(array $user) : array
    {
        $key = array_search($user['upline'], array_column($this->users, 'id'));

        if (!isset($users[$key])) {
            return [];
        }

        return $users[$key];
    }
}
