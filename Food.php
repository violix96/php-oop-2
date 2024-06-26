<?php
require_once 'Product.php';

class Food extends Product
{
    private $type = 'Food';

    public function getType()
    {
        return $this->type;
    }

    public function getDetails()
    {
        return "Food: " . $this->getTitle() . ", Price: " . $this->getPrice() . " EUR";
    }
}
