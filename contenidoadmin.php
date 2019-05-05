<?php session_start();
if (isset($_SESSION['usuario'])) {
	require 'indexadmin.php';
} else {
	header('Location: loginadmin.php');
}
?>