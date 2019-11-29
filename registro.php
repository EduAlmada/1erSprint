<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<link rel="stylesheet" href="css/registro.css">
<body>
<?php include("nav.php") ?>	

	<section>
	<h1>CREAR CUENTA</h1>
	<form>		
		<br>
		<LABEL>INFORMACIÓN DE USUARIO</LABEL>
		<br>
		<input type="text" name="name" required placeholder="Nombre De Usuario">
		
		<br>
		<label>INFORMACIÓN DE INICIO DE SESIÓN</label>	
		<br>
		<input type="email" name="email" required placeholder="E-mail">		
		<br>
		<br>
		<input type="password" name="pass" required placeholder="Clave">
		<br>
		<br>
		<button> CREAR</button>		
	</form>
	</section>

	<?php include("footer.php") ?>
<?php include("scripts.php") ?>

	
	

</body>

	
</html>