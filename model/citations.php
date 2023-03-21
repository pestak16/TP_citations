<?php

$fic = dirname(__DIR__). '/data/citations';
function ajouter(string $citation, string $auteur, string $fichier) : bool{
    
    if(!file_exists($fichier)) {
        trigger_error('Le fichier pas existe', E_USER_NOTICE);
        return false;
    }
    if(empty($auteur) || empty($citation)){
        trigger_error('Pas données', E_USER_NOTICE);
        return false;
    }
    $ligne = $citation . ';' . $auteur;
    $fic = fopen($fichier, 'a');
    fwrite($fic, PHP_EOL . $ligne );
    fclose($fic);
    return true;
}

function retourneCitations(string $fichier): bool|array{
    if(!file_exists($fichier)) {
        trigger_error('Le fichier pas existe', E_USER_NOTICE);
        return false;
    }
    $data = file($fichier);
    $redata = [];

    foreach($data as $item){
        $temp = explode(';',$item);
        $citation = $temp[0];
        $auteur = $temp[1];
        $redata[] = [
            'citation' => $citation,
            'auteur' => $auteur
        ];
    }
    return $redata;

}


