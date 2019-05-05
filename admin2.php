<?php session_start();
if (isset($_SESSION['admin'])) {
	header('Location: contenidoadmin.php');
} else {
	header('Location: registrate.php');
}
?>