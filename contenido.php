<?php session_start();
if (isset($_SESSION['usuario'])) {
	require 'index2.php';
} else {
	header('Location: login.php');
}
?>