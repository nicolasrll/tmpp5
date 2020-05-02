<?php

namespace App\Entity;

use Core\AbstractEntity;

class Admin extends AbstractEntity
{
    protected $id;
    protected $login = '';
    protected $password = '';

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login)
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }
}
