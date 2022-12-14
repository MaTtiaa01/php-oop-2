<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Weightable.php';

class Food extends Product
{
    use Weightable;

    public function __construct(String $name, String $category, String $title, String $img, Int $price, String $type, protected Float $weight)
    {
        parent::__construct($name, $category, $title, $img, $price, $type);
        $this->weight = $weight;
    }
}
