<?php
require_once 'Product.php';

class Toy extends Product
{
    private $type = 'Toy';

    public function getType()
    {
        return $this->type;
    }

    public function getDetails()
    {
        return "Toy: " . $this->getTitle() . ", Price: " . $this->getPrice() . " EUR";
    }
}
