<?php
//este es un ejemplo desde funciones vistas que os ayudara para labase de tatos dfel traductor.

    
   //Debe ser un diseño para el usuario
   $cadena = $_GET[ 'frase' ];
    
   //Debe ser un diseño para el usuario
   echo $cadena."<br>"; 

   $cadena = str_replace( "Yu'ú", "yo", $cadena );
   $cadena = str_replace( "A-mi",  "él",  $cadena );
   $cadena = str_replace( "wa\'agú", "voy",  $cadena );
   $cadena = str_replace( "wéé\'e", "puerto",  $cadena );
   $cadena = str_replace( "petápu", "hacia",  $cadena );
   $cadena = str_replace( "wa\'", "fue",  $cadena );
   $cadena = str_replace( "wa'a'", "al",  $cadena );
   $cadena = str_replace( "d[´i]á", "rio",  $cadena );

   //Debe ser un diseño para el usuario
   echo $cadena;