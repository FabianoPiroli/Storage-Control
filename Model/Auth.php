<?php

class AuthService {

    public function authenticate(Person $user, string $login, string $password): bool
    {
        if ($user->getLogin() !== $login) {
            return false;
        }

        return $user->verifyPassword($password);
    }
}
