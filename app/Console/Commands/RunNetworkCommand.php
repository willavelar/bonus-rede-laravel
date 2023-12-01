<?php

namespace App\Console\Commands;

use App\Network\BonusPoint\Users5Bonus5Point40;
use App\Network\BonusPointCalculator;
use App\Network\BonusPointFacade;
use App\Network\User\UserNetwork;
use App\Network\User\UserNetworkBonus;
use App\Network\User\UserNetworkBuilder;
use App\Network\User\UserRepository;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class RunNetworkCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:network {--value=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $value = (float) $this->option('value');

        if (!$this->validateHandle($value)) {
            return;
        }

        $usersAplly = (new BonusPointFacade($value, UserRepository::getUsers()))->apply();

        foreach ($usersAplly as $user) {
            $this->info(sprintf('O usuário %s recebeu R$ %s em bônus e %s pontos', $user['name'],
                number_format($user['bonus'], 2, ',', '.'), $user['point']));
        }

    }

    private function validateHandle(float $value) : bool
    {
        if ($value <= 0) {
            $this->error('Digite um valor ou um valor maior que zero!');
            return false;
        }

        return true;
    }

}
