<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../pages/login.php');
	exit();
} else {
	header('Location: profile.php');
	exit();
}
?>
