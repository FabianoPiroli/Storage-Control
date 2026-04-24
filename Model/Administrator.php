<?php

class Administrator extends Person{

    public function __construct(string $name, string $lastName, string $login, string $password, string $email, string $photo){
        parent::__construct($name, $lastName, $login, $password, $email, $photo);
    }
    // Lógica para criar, atualizar e deletar usuários e lojas
    public function createUser(): void{
        // Lógica para criar usuários
    }
    public function updateUser(): void{
        // Lógica para atualizar usuários
    }
    public function deleteUser(): void{
        // Lógica para deletar usuários
    }

    // Lógica para criar, atualizar e deletar lojas
    public function createStore(): void{
        // Lógica para criar lojas
    }
    public function updateStore(): void{
        // Lógica para atualizar lojas
    }
    public function deleteStore(): void{
        // Lógica para deletar lojas
    }

    public function managePermissions(): void{
        // Lógica para gerenciar permissões
    }

    public function assingStoreToManager(): void{
        // Lógica para atribuir lojas a gerentes
    }
    public function viewStores(): void{
        // Lógica para visualizar lojas
    }

    public function viewUsers(): void{
        // Lógica para visualizar usuários
    }

    public function viewManagers(): void{
        // Lógica para visualizar gerentes
    }

    public function viewStorage(): void{
        // Lógica para visualizar estoque de todas as lojas
    }


}