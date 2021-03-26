<?php

session_start();
require("conexion/conexion1.php");

$username=$_POST['mail'];
$pass=$_POST['pass'];

$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
if($f2=mysqli_fetch_assoc($sql2)){
    if ($pass==$f2['pasadmin']) {
        $_SESSION['ID']=$f2['ID'];
        $_SESSION['user']=$f2['user'];
        $_SESSION['rol']=$f2['rol'];

        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
        echo "<script>location.href='administrativo/inicio1.php'</script>";
        
    }
}

$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['ID']=$f['ID'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location: carrito/productos.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>