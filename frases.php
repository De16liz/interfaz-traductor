<?php
//incluye la conección de la BD
include("conexion.php");

class llamado extends conexion
{

    static function traduce_frase($cadena, $palabra, $palabra2)
    {

        $conexion = self::conectar( );

        //$cadena = $_POST[ 'frase' ];
            if($palabra == $palabra2)
            {
                //Debe ser un diseño para el usuario
            echo $cadena."<br>"; 
        
            //Debe provenir de una base de datos.
            $cadena = str_replace( "$palabra", "$palabra2", $cadena );

            return $cadena;
            }
            
        /*$cadena = str_replace( "él", "A-mi", $cadena );
        $cadena = str_replace( "voy", "wa\'agú", $cadena );
        $cadena = str_replace( "puerto", "wéé\'e", $cadena );
        $cadena = str_replace( "hacia", "petápu", $cadena );
        $cadena = str_replace( "fue", "wa\'", $cadena );
        $cadena = str_replace( "al", "wa'a'", $cadena );
        $cadena = str_replace( "rio", "d[´i]á", $cadena );*/
        
    //return $cadena;
    }
}

 
   