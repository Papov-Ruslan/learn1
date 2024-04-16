<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include ('../system/system.php');
include ('../app/controllers/users.php');
include ('../app/controllers/products/products.php');
print_r($_SERVER['DOCUMENT_ROOT'] . '/system/system.php');