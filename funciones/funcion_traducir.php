<?php

    //incluye la conección de la BD
    include("conexion.php");

    class llamado extends conexion
    {
        static function traduce($palabra)
        {
        
            $conexion = self::conectar( );

            
            //construcción de la consulta
            $sql = "SELECT palabra
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

            return $resultado;

        }
    }

  