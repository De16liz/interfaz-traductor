<?php

    //clase para mostrar la vista
    class vistas{
        static function mostrar_vista( $vista )
        {
            //secciones para mostrar la vista
            $sesion = $vista;
            include( "v-plantilla.php");

        }
    }

?>