<?php
$mysql = mysqli_connect("localhost", "admin", "12345", "person_book");

if ($mysql === false)
{
    die("Ошибка соединение с БД. - " . mysqli_connect_error());

}

