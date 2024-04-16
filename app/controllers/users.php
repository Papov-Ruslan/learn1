<?php

$sql = "SELECT * FROM `users` WHERE 1;";
$queryResult = mysqli_query($mysql, $sql);

$user = mysqli_fetch_all($queryResult, MYSQLI_ASSOC);
echo '<pre>';
print_r($user);
echo '<pre>';