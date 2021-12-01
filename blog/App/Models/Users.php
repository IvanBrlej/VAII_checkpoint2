<?php

namespace App\Models;

use App\Core\Model;

class Users extends \App\Core\Model
{

    public function __construct(public ?string $email = "", public ?string $password = "")
    {
    }

    public static function setDbColumns()
    {
        return['email', 'password'];
    }

    public static function setTableName()
    {
        return "users";
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
}