<?php
	session_start();
	//destruye la sesion de todos los usuarios 
	//session_destroy ();
	//cierra la sesion del usuario acrual
	unset($_SESSION['miSesion']);
	//lo redireccionamos a la pagina principal
	header("location:../index.html");
?>