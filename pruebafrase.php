<?php

include("frases.php");

$cadena = $_POST[ 'frase' ];

$r = llamado::traduce_frase($cadena, $palabra, $palabra2);

echo $r;