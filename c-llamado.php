<?php

    include("funciones/funcion_traducir.php");
    include( "Vimprimir.php" );
    
    $palabra = $_POST[ 'palabra' ];
    $r = llamado::traduce("$palabra");
    $r = Vimprimir::organizar( $r );

    //echo $r;

    //seccion de vistas
    $seccion = "v-llamado.php";
    include( "v-plantilla.php" );
