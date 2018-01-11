<?php
session_start();

if(isset($_POST['user']) and isset($_POST['pswd'])){
	include ('conexion.php');
	$username=mysqli_real_escape_string($conexion,$_POST['user']);
	$password=mysqli_real_escape_string($conexion,$_POST['pswd']);
	$comprobar_nombre='select * from registros where nombre="'.$username.'"';
	$comprobacion=$conexion->query($comprobar_nombre);
	if($comprobacion->num_rows>0){
		$consulta_base=mysqli_query($conexion,'select password from registros where nombre="'.$username."'");
		$recoger_dato=mysqli_fetch_assoc($consulta_base);
		$comprobar_password=password_verify($password,$pass['password']);
		if($comprobar_password){
			$_SESSION['nombre']=$username;
		}else{
			print 'los datos han sido incorrectos <br>
				   <a href="./?view=index">Volver</a>';
		}
	}else{
		print 'no se ha encontrado en el registro <br>
			   <a href="./?view=index">Volver</a>';
	}
}else {
	header ('location ./?view=index');
}


?>