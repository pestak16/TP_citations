<?php

require_once 'model/citations.php';
$citations = retourneCitations($fic);
shuffle($citations);
$citation = $citations[0];

require 'view/lire.php';

