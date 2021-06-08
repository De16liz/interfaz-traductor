<?php
//este es un ejemplo desde funciones vistas que os ayudara para labase de tatos dfel traductor.
    include("conexion.php")

    class frase extends conexion
    {
       static function traduce($cadena)
       {
         
         $conexion = self::conectar( );

            
         //construcción de la consulta
         /*$sql = "SELECT palabra
         FROM tb_traduccion t1, tb_palabras t2
         WHERE palabra_1 = ( 
                                 SELECT palabra_1
                                 FROm tb_palabras t3, tb_traduccion t4
                                 WHERE t4.id_palabra = t3.id_palabra
                                 AND t3.palabra LIKE '$palabra'
                         )
         AND t1.id_palabra = t2.id_palabra;";

         //$sql = "SELECT DATABASE()";

         //$sql = "show TABLES";
         
         //echo $sql;
         $resultado = $conexion->query($sql);//ejecuta la consulta

            return $resultado;*/

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

            
       }
    }
