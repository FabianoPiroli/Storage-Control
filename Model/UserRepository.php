<?php

class UserRepository {

    private array $users = [];

    public function addUser(Person $user): void {
        $this->users[$user->getLogin()] = $user;
    }

    public function findByLogin(string $login): ?Person {
        return $this->users[$login] ?? null;
    }
}
