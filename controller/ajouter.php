<?php
require_once 'model/citations.php';
if(isset($_POST['auteur'], $_POST['citation'])){
    if(!empty($_POST['auteur']) && !empty($_POST['citation'])){
       if(ajouter($_POST['citation'], $_POST['auteur'], $fic)){
        $msg = [
            'css' => 'is-success',
            'text' => 'C ajoute'
        ];
       }else{
        $msg = [
            'css' => 'is-warning',
            'text' => 'Ya une pouille dans le cottage!'
        ];
       }

    }else{
        $msg = [
            'css' => 'is-warning',
            'text' => 'Debile, remplis tes champs'
        ];
    }
}
require 'view/ajouter.php';