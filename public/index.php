<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


 include ('../system/system.php');

// print_r($_SERVER['DOCUMENT_ROOT'] . '/system/system.php');
include ('../resources/header.html');

if (isset($_GET['route']))
{
    if($_GET['route']==='products')
    {
        include('../app/controllers/products/products.php');
    }
    if($_GET['route']==='users')
    {
        include('../app/controllers/users.php');
    }
}
include ('../resources/footer.html');