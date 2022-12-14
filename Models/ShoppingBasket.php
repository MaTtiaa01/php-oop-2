<?php

class ShoppingBasket
{
    protected $basketProducts = [];
    public function __construct(protected User $user)
    {
        $this->user = $user;
    }

    public function add(Product $product, $quantity)
    {
        array_unshift(
            $this->basketProducts,
            [
                'product' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'amount' => $product->price * $quantity
            ]
        );
    }

    public function get_basket_array()
    {
        try {
            if (count($this->basketProducts) < 1) {
                throw new Exception("Your basket is empty");
            }
            return $this->basketProducts;
        } catch (Exception $e) {
            echo $e->getMessage();
            die;
        }
    }
}
