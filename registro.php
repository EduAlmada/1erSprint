<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<link rel="stylesheet" href="css/registro.css">
<body>
<?php include("nav.php"); 
	if (isset($_FILES["avatar"]["name"])) {
		if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {
		$nombre = $_FILES["avatar"]["name"];
		$archivo2 = $_FILES["avatar"]["tmp_name"];
		$ext = pathinfo($nombre, PATHINFO_EXTENSION);
		$miarchivo = dirname(__FILE__);
		$miarchivo = $miarchivo . "\archivos/" . uniqid() . "." . $ext;
		move_uploaded_file($archivo2, $miarchivo);
		}
	}
?>	
<?php require_once 'controladores/validacionRegistro.php';
$arrayDeErrores = "";
if($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);//esta funcion deberia devolver los errores encontrados .
}
	?>
	<section>
	<h1>CREAR CUENTA</h1>
	<form action="" method="POST" enctype="multipart/form-data">		
		<br>
		<label>INFORMACIÓN DE USUARIO</label>
		<br>
		<input type="text" name="nombre" required placeholder="Nombre De Usuario" value="<?= persistirDato($arrayDeErrores,'nombre');?>">
		<br>
		<label>INFORMACIÓN DE INICIO DE SESIÓN</label>	
		<br>
		<input type="email" name="email" required placeholder="E-mail" value="<?= persistirDato($arrayDeErrores,'email');?>">>		
		<br>
		<br>
		<input type="password" name="password" required placeholder="Contraseña">
		<br>
		<br>
		<input type="password" name="confirmar" required placeholder="Repetir contraseña">
		<p></p>
		<div class="text-center ml-5">
			<label for="file">Adjunta una imagen o foto para tu cuenta de Usuario</label>
			<input type="file" name="avatar" id="avatar">
		</div>
		<br>
		<button type="submit">CREAR</button>	
	</form>
	</section>

	<?php include("footer.php") ?>
<?php include("scripts.php") ?>

	
	

</body>

	
</html>