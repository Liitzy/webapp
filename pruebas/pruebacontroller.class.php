<?php
	require "../controller/ControllerUsuario.class.php";
	$ctr = new ControllerUsuario();
	//$ctr->agregar();
	$ctr->autentificar("valeri",sha1("V1aleria9_"));
?>