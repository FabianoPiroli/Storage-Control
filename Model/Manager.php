<?php

class Manager extends Person{

    public function __construct(string $name, string $lastName, string $login, string $password, string $email, string $photo){
        parent::__construct($name, $lastName, $login, $password, $email, $photo);
    }

    public function addProduct(Product $product): void{
        // Lógica para adicionar um produto
    }

    public function updateProduct(Product $product): void{
        // Lógica para atualizar um produto
    }

    public function deleteProduct(Product $product): void{
        // Lógica para deletar um produto
    }
}
?>