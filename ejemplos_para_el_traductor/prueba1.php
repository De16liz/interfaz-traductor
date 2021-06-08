<?php

//Debe ser un diseño para el usuario
   $cadena = $_GET[ 'frase' ];
    
   //Debe ser un diseño para el usuario
   echo $cadena."<br>"; 

   //Debe provenir de una base de datos.
   $cadena = str_replace( "yo", "Yu'ú", $cadena );
   $cadena = str_replace( "él", "A-mi", $cadena );
   $cadena = str_replace( "voy", "wa\'agú", $cadena );
   $cadena = str_replace( "puerto", "wéé\'e", $cadena );
   $cadena = str_replace( "hacia", "petápu", $cadena );
   $cadena = str_replace( "fue", "wa\'", $cadena );
   $cadena = str_replace( "al", "wa'a'", $cadena );
   $cadena = str_replace( "rio", "d[´i]á", $cadena );


   //Debe ser un diseño para el usuario
   echo $cadena;