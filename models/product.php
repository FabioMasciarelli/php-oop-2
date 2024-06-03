<?php

class Product {
    protected string $name;
    protected int $price;
    protected string $image;

    function __construct(string $name, string $price, string $image) {
        $this->name     = $name;
        $this->price    = $price;
        $this->image    = $image;
    }
}