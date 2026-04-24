<?php

class Person {

    private string $name;
    private string $lastName;
    private string $login;
    private string $passwordHash; // Armazena o hash da senha
    private string $email;
    private string $photo;

    public function __construct(
        string $name,
        string $lastName,
        string $login,
        string $crudePassword, // Recebe a senha em texto puro
        string $email,
        string $photo
    ){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Email inválido");
        }
        // Chama a função de validação de senha antes de hash
        $this->validatePassword($crudePassword);

        $this->name = $name;
        $this->lastName = $lastName;
        $this->login = $login;
        $this->passwordHash = password_hash($crudePassword, PASSWORD_DEFAULT); // Armazena o hash da senha
        $this->email = $email;
        $this->photo = $photo;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getPhoto(): string {
        return $this->photo;
    }

    // Função de validação de senha
    private function validatePassword(string $password): void
    {
        if (strlen($password) < 8) {
            throw new InvalidArgumentException("A senha deve ter pelo menos 8 caracteres");
        }

        if (!preg_match('/[A-Z]/', $password)) {
            throw new InvalidArgumentException("A senha deve conter pelo menos uma letra maiúscula");
        }

        if (!preg_match('/[0-9]/', $password)) {
            throw new InvalidArgumentException("A senha deve conter pelo menos um número");
        }

        if (!preg_match('/[\W_]/', $password)) {
            throw new InvalidArgumentException("A senha deve conter pelo menos um símbolo");
        }
    }
    // Método para obter o login do usuário
    public function getLogin(): string {
        return $this->login;
    }
    // Método para verificar a senha
    public function verifyPassword(string $password): bool {
        return password_verify($password, $this->passwordHash);
    }
}
