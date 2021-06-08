<?php 

  //incluye las vistas
  include_once("configuraciones.php");
  $db = new BasedeDatos();

  //realiza la consulta
  $ar = $db->select('SELECT idioma FROM tb_idiomas');

?>


<select name="menu"><!-- lista -->

  <?php


    foreach($ar as $a){

      $idioma = $a['idioma'];//captura columna
      //imprime items de la lista
      echo "<option value='$idioma'>$idioma</option>";
    }

  ?>
  
</select><!--  termina lista -->

<!--icono -->
<button type="button" title="Cambiar orden de opciones" id="btn_change" style="width: auto; margin-right: 20px; margin-left: 20px;" class="btn btn-default btn-sm btn-circle">
<span class="glyphicon glyphicon-transfer"></span>
<img src="imagenes/iconos/icono_transferir.svg" style="height: 25px;" >
</button>
<select name="menu"><!-- lista -->
  
  <?php
    foreach($ar as $a){

      $idioma = $a['idioma'];//captura columna
      //imprime items de la lista
      echo "<option value='$idioma'>$idioma</option>";
    }

    // $sql  = " SELECT idioma ";
    // $sql .= " FROM tb_idiomas ";
    // $resultado = $conexion->query( $sql );

    // while( $fila = mysqli_fetch_assoc( $resultado ) )
    // {
    //     $idioma = $fila[ 'idioma' ];
    //     echo "<option value='$idioma'>$idioma</option>";
    // }
  ?>

</select><!--  termina lista -->

<br><br><br>

<!-- Formulario -->
<form action="c-llamado.php" method="POST">
Digite la palabra a traducir <br><input type="text" name="palabra">
    <br>
    <input type="submit" value="Traducir"><!-- Botón -->
</form><!--  cierre del formulario -->

<script>  

  

</script>
