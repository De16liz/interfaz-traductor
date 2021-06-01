
<select name="menu">
  <option>Español</option>
  <option value="2">Tucano</option>
</select>
<img src="imagenes/iconos/icono_transferir.svg" style="height: 25px;">
<span class="icon icon-mid"><span class="icon-mail"></span></span>
<select name="menu">
  <option>Tucano</option>
  <option value="2">Español</option>
</select>

<br><br><br>


<!--<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-3">
      <div class="form-group two-fields">
        
        <div class="input-group">
        <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="digite palabra"></textarea>          
        <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Resultado"></textarea>        </div>
      </div>
    </div>
  </div>
</div>-->

<form action="c-llamado.php" method="POST">
    Inserte palabra<input type="text" name="palabra">
    <br>
    <input type="submit" value="Traducir">
</form>
