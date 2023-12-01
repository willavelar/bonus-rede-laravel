<?php

namespace App\Network\User;

class UserNetworkBuilder
{
    private UserNetwork $userNetwork;
    private int $upline;

    public function __construct(int $id)
    {
        $this->userNetwork = new UserNetwork();
        $this->userNetwork->setId($id);
        $this->userNetwork->setActive(false);
    }

    public function hasName(string $name) : self
    {
        $this->userNetwork->setName($name);

        return $this;
    }

    public function active() : self
    {
        $this->userNetwork->setActive(true);

        return $this;
    }

    public function uplineId(int $uplineId) : self
    {
        $upline = new UserNetwork();
        $upline->setId($uplineId);

        $this->userNetwork->setUpline($upline);

        return $this;
    }

    public function upline(UserNetwork $upline) : self
    {
        $this->userNetwork->setUpline($upline);

        return $this;
    }

    public function build() : UserNetwork
    {
        return $this->userNetwork;
    }
}
