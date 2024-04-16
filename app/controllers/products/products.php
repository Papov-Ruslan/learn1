<?php

$productsSqlQuery = "SELECT * FROM `products`;";
$productsQueryResult = mysqli_query($mysql, $productsSqlQuery);

$products = mysqli_fetch_all($productsQueryResult, MYSQLI_ASSOC);
echo '<pre>';
print_r($products);
echo '<pre>';