<?php

require_once 'Category.php';
require_once 'Food.php';
require_once 'Toy.php';
require_once 'Bed.php';

// categorie
$dogCategory = new Category('Dog');
$catCategory = new Category('Cat');

// prodotti
$products = [
    new Food('Dog Food', 20, 'img/dog_food.jpeg', $dogCategory),
    new Toy('Cat Toy', 10, 'img/cat_toy.jpeg', $catCategory),
    new Bed('Dog Bed', 50, 'img/dog_bed.jpeg', $dogCategory),
    new Food('Dog Food 2', 30, 'img/food2.jpeg', $dogCategory),
    new Toy('Cat Toy 2', 60, 'img/cat_toy2.jpeg', $catCategory),
    new Bed('Dog Bed', 80, 'img/dog_bed2.jpeg', $dogCategory),
];
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center mb-5">Pet Shop</h1>
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?php echo $product->getImage(); ?>" class="card-img-top img-fluid" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getTitle(); ?></h5>
                            <p class="card-text">Price: €<?php echo $product->getPrice(); ?></p>
                            <p class="card-text">Category: <?php echo $product->getCategory()->getName(); ?></p>
                            <p class="card-text">Type: <?php echo $product->getType(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>