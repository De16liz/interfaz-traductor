<?php

    class vistas{
        static function mostrar_vista( $vista )
        {
            $sesion = $vista;
            include( "v-plantilla.php");

        }
    }

?>