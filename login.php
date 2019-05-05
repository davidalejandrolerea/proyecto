<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index3.php');
}
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	


	try {
		$conexion = new PDO('mysql:host=localhost;dbname=legajo', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();;
	}

	$statement = $conexion->prepare('
		SELECT * FROM login WHERE usuario = :usuario AND pass = :password'
	);
	$statement->execute(array(
		':usuario' => $usuario, 
		':password' => $password
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index3.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}


require 'login.view.php';

?>