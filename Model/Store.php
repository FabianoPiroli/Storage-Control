<?php

class Store{

    private string $name;
    private string $address;
    private string $photo;

    public function __construct(string $name, string $address, string $photo){
        $this->name = $name;
        $this->address = $address;
        $this->photo = $photo;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getAddress(): string{
        return $this->address;
    }

    public function getPhoto(): string{
        return $this->photo;
    }
}
?>