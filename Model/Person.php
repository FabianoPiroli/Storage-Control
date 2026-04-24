<?php

class Person{

    private string $name;
    private string $lastName;
    private string $login;
    private string $password;
    private string $email;
    private string $photo;

    public function __construct(string $name, string $lastName, string $login, string $password, string $email, string $photo){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->photo = $photo;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getLastName(): string{
        return $this->lastName;
    }

    public function getLogin(): string{
        return $this->login;
    }

    public function getPassword(): string{
        return $this->password;
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function getPhoto(): string{
        return $this->photo;
    }

    public function login(string $login, string $password, callable $checkRole): bool{
        // Lógica para autenticar o usuário
        return $this->login === $login && $this->password === $password && $checkRole();
    }
}
?>
