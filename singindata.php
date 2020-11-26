<?php
	include('conexion.php');

	if (isset($_POST['register'])) {
		$usuario = trim($_POST['usuario']);
		$name = trim($_POST['name']);
		$dni = trim($_POST['dni']);
		$mail = trim($_POST['mail']);
		$password = sha1(trim($_POST['password'])); // encripto la contraseña mediante sha1() antes de guardar
		$consulta = "INSERT INTO `usuarios`( `usuario`, `name`, `dni`, `mail`, `password`) VALUES ('$usuario','$name','$dni','$mail','$password')";
		$resultado = mysqli_query($conexion, $consulta);
		if ($resultado) { ?>
			<h3> Te has registrado correctamente.</h3>
		<?php } else { ?>
			<h3> Ha ocurrido un error. </h3>
	<?php }} ?>