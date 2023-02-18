<?php

class User {
    private $email;
    private $password;
    private $id;
    private $username;

    public function __construct(
        string $email,
        string $password,
        int $id,
        string $userame
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->id = $id;
        $this->username = $username;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
}