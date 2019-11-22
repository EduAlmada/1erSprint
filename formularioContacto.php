<!DOCTYPE html>
<html lang="es">
<?php include("head.php"); ?>
<body>

<?php include("nav.php"); ?>
  
<div class="container" >
<br><br><br>
<div class="row" style="border-bottom-style: solid; border-left-style: solid;">
<div class="col-md-12">

<form class="mt-1 mb-2">
<div class="form-row alert alert-primary" role="alert" style="background-color:#a027f9; color:#ffffff;">
<h4><strong>FORMULARIO DE CONTACTO</strong></h4> 
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputApellido">Apellido</label>
      <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido" required>
    </div>
</div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">E-mail</label>
      <input type="email"  class="form-control" id="email" placeholder="Ingrese E-mail" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputTelefono">Celular / Whatsapp</label>
      <input type="tel" pattern="[0-9]{10}" class="form-control" id="telefono" placeholder="Teléfono" required>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-12">
    <label for="inputMensaje">Mensaje</label>
    <textarea class="form-control" id="mensaje" rows="3" placeholder="Ingrese su consulta"></textarea>
  </div>
    </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>
</div>
</div>

<?php include("scripts.php"); ?>;
</body>
</html>