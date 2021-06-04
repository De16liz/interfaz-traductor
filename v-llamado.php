
<!-- Formulario -->
<form action="c-llamado.php" method="POST">
    Digite la palabra a traducir <br> <input type="text" name="palabra">
   
    <input type="submit" value="Traducir"><!-- Botón -->
</form><!--  cierre del formulario -->

<?php echo $r; ?>