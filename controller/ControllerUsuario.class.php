<?php session_start();?>
<?php
	require "../service/UsuariosServiceImp.class.php";
	require "../model/usuarios.class.php";

	class ControllerUsuario {
		/*
		public function agregar(){
			$usuario =  new Usuarios();
			$userService = new UsuariosServiceImp();
			//modificar los datps del objeto usuario
			$usuario->setNombre("Litzy ");
			$usuario->setEmail("liz02@gmail.com");
			$usuario->setUsername("litzy Rodriguez  ");
			$usuario->setPassword(sha1("liz01"));
			$usuario->setFechaRegistro(date("Y-m-d"));
			//llamado del metodo guardar de la clase de servicio
			$userService->guardar($usuario);
			//lo enviamos a la vista de auntentificacion
			//header("location:../view/formLogin.html");
		}
		/*metodo de prduccion*/
		public function agregar($usuario){
			$userService = new UsuariosServiceImp();
			//llamado del metodo guardar de la clase de servicio
			$userService->guardar($usuario);
			header("location:../view/formLogin.html");
		}

		public function autentificar($username,$password){
			$userService = new UsuariosServiceImp();
			$usuario = new Usuarios();
			$usuario = $userService->buscarPorUsernamePassword($username,$password);
			//evaluar si regresa un usuario valido
			if ( is_object($usuario)){
				//echo "<br Este usuario si es valido";
				//varias variables de sesion
				/*$_SESSION['nombre'] =$usuario->getNombre();
				//$_SESSION['correo'] =$usuario->getEmail();*/
				
				//arreglo asociativo
				$_SESSION['miSesion'] = array();
				$_SESSION['miSesion']['nombre'] = $usuario->getNombre();
				$_SESSION['miSesion']['correo'] = $usuario->getEmail();
				$_SESSION['miSesion']['id'] = $usuario->getId();
				//echo "Bienvenido : ".$_SESSION['miSesion']['nombre'];
				header("location:../view/productos.class.php");
			}else{
				//<echo "<br>Este usuario no existe en la base";
				header("location:../view/formLogin.html");
			}
		}
	}

?>