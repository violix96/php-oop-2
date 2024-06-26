<?php
require_once 'Product.php';

class Bed extends Product
{
    private $type = 'Bed';

    public function getType()
    {
        return $this->type;
    }

    public function getDetails()
    {
        return "Bed: " . $this->getTitle() . ", Price: " . $this->getPrice() . " EUR";
    }
}
