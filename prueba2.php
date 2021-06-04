<?php

    include_once("basededatos.php");
    $db= new BasedeDatos();

    $ar['descripcion'] ='Holas';
    $ar['fecha_registro'] = '2021-05-15';

    if ($db->insert('tb_log',$ar) == true){
        echo "registro exitoso";
    }
    else{
        echo "Erorr";
    }
    
