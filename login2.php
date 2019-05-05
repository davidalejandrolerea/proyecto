<?php session_start();

if (isset($_SESSION['admin'])) {
	header('Location: admin2.php');
}
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['admin']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	


	try {
		$conexion = new PDO('mysql:host=localhost;dbname=legajo', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();;
	}

	$statement = $conexion->prepare('
		SELECT * FROM admin WHERE admin = :nombre AND pass = :password'
	);
	$statement->execute(array(
		':nombre' => $usuario, 
		':password' => $password
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: admin2.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}


require 'loginadmin.php';

?>