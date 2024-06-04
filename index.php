<?php 

require_once __DIR__ . '/models/products.php';
require_once __DIR__ . '/models/food.php';

try {

    $category1 = new Category('snake');

} catch (Exception $e) {

    $errors = [
        'text' => $e->getMessage(),
        'line' => $e->getLine(),
        'file' => $e->getFile(),
        
    ];

    echo 'Questo file non esiste ' . $e->getFile();
    var_dump ($errors);

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Planet</title>
</head>
<body>
    

    <div class="card">
        <div class="img-box">
            <img src="" alt="">
        </div>
        <div class="main">

        </div>
    </div>


</body>
</html>

