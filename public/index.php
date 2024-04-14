<?php
print_r($_POST);

$mysql = mysqli_connect("localhost", "admin", "12345", "person_book");

if ($mysql === false)
{
    die("Ошибка соединение с БД. - " . mysqli_connect());

}

$sql = "SELECT  `name`, `login`, `password` FROM `users` WHERE 1;";
$queryResult = mysqli_query($mysql, $sql);

$user = mysqli_fetch_all($queryResult, MYSQLI_ASSOC);
echo '<pre>';
print_r($user);
echo '<pre>';