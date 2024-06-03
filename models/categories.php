<?php

class Category {
    private string $category;

    //setter
    function setCategory($category) {
        if($category === 'dog' || $category === 'cat') {
            $this->category = $category;
        } else {
            throw new Exception('non abbiamo prodotti per il tuo animale');
        }
    }

    //getter
    function getCategory() {
        return $this->category;
    }
}
