<?php

class Product
{
    public $name;
    public $category;
    public $title;
    public $img;
    public $price;
    public $type;


    public function __construct(String $name, String $category, String $title, String $img, Float $price, String $type)
    {
        $this->name = $name;
        $this->category = $category;
        $this->title = $title;
        $this->img = $img;
        $this->price = $price;
        $this->type = $type;
    }
}
