<?php

if(isset($_GET['p'])){
    switch($_GET['p']){
        case 'lire':
        case 'ajouter':
            $controller = $_GET['p'];
            break;
        default:
            die('C de la merde, JP Coffe');
    }
}else{
    $controller = 'lire';
}
require 'controller/' . $controller . '.php';