<?php

require_once __DIR__ .'/product.php';
require_once __DIR__ . '/categories.php';

class Food extends Product {

    public string $expirationDate;
    private string $category;

    function __construct($name, $price, $image, string $expirationDate, Category $category) {

        parent::__construct($name, $price, $image);

        $this->expirationDate = $expirationDate;
        $this->category = $category;
    }

    function getCategory() {
        return $this->category;
    }
}
