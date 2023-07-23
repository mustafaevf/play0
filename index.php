<?php 
ini_set('display_errors', 1);


$url = substr($_SERVER['REQUEST_URI'], 1);

var_dump($url);

if($url == '') {
    include "views/index.php";
}

?>