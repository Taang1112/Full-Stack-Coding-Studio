<?php
class Product
{
    public $nama
    public $price
    public $description

    public function_construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;


    }
}
$product1 = new product('Smartphone', 5000000, 'Smartphone terbaru dengan kamera berkualitas tinggi');