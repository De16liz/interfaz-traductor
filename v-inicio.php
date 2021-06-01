
<select name="menu">

  <?php

    $conexion = mysqli_connect( "localhost", "root", "", "traductor3_3" );
    $sql  = " SELECT idioma ";
    $sql .= " FROM tb_idiomas ";
    //$sql .= " WHERE t1.id_palabra = t2.id_palabra ";
    //echo $sql;
    $resultado = $conexion->query( $sql );

    while( $fila = mysqli_fetch_assoc( $resultado ) )
    {
        $idioma = $fila[ 'idioma' ];
        //$palabra = $fila[ 'palabra' ];
        echo "<option value='$idioma'>$idioma</option>";
    }
  ?>
  
</select>

<img src="imagenes/iconos/icono_transferir.svg" style="height: 25px;">


<select name="menu">
  
  <?php

    $sql  = " SELECT idioma ";
    $sql .= " FROM tb_idiomas ";
    $resultado = $conexion->query( $sql );

    while( $fila = mysqli_fetch_assoc( $resultado ) )
    {
        $idioma = $fila[ 'idioma' ];
        echo "<option value='$idioma'>$idioma</option>";
    }
  ?>

</select>

<br><br><br>




<form action="c-llamado.php" method="POST">
    Inserte palabra <input type="text" name="palabra">
    <br>
    <input type="submit" value="Traducir">
</form>
