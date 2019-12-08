<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<link rel="stylesheet" href="css/registro.css">
<body>
<?php include("nav.php") ?>	

	<section>
	<h1>CREAR CUENTA</h1>
	<form action="controladores/validacionRegistro.php" method="POST" enctype="multipart/form-data">		
		<br>
		<label>INFORMACIÓN DE USUARIO</label>
		<br>
		<input type="text" name="nombre" required placeholder="Nombre De Usuario">
		<br>
		<label>INFORMACIÓN DE INICIO DE SESIÓN</label>	
		<br>
		<input type="email" name="email" required placeholder="E-mail">		
		<br>
		<br>
		<input type="password" name="password" required placeholder="Contraseña">
		<br>
		<br>
		<input type="password" name="confirmar" required placeholder="Repetir contraseña">
		<br>
		<br>
		<label for="file">Upload archivo</label>
		<input type="file" name="archivo">
		<p></p>
		<button type="submit">CREAR</button>	
	</form>
	</section>

	<?php include("footer.php") ?>
<?php include("scripts.php") ?>

	
	

</body>

	
</html>