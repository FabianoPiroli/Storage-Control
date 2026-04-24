<?php

class Product{

    private string $name;
    private int $gtin;
    private float $price;
    private string $photo;
    //verificar aplicação de store

    public function __construct(string $name, int $gtin, float $price, string $photo){
        $this->name = $name;
        $this->gtin = $gtin;
        $this->price = $price;
        $this->photo = $photo;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getGtin(): int{
        return $this->gtin;
    }

    public function getPrice(): float{
        return $this->price;
    }

    public function getPhoto(): string{
        return $this->photo;
    }
}
?>
