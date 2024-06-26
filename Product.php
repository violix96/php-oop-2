<?php
class Product
{
    private $title;
    private $price;
    private $image;
    private $category;


    public function __construct($title, $price, $image, $category)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getCategory()
    {
        return $this->category;
    }

    public function getDetails()
    {
        return "Product: " . $this->title . ", Price: " . $this->price . " EUR";
    }
}
