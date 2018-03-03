<?php
    //include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
    include($path . "model/connect.php");
	class DAOProfile{
		function update_username($datos){
          @session_start();
          $username=$_SESSION['user']['username'];
        	$sql = " UPDATE user SET username='$datos' WHERE username='$username'";

            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
    function update_email($datos){
          @session_start();
          $email=$_SESSION['user']['email'];
        	$sql = " UPDATE user SET email='$datos' WHERE email='$email'";

            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
    function update_password($datos){
          @session_start();
          $email=$_SESSION['user']['email'];
        	$sql = " UPDATE user SET password='$datos' WHERE email='$email'";

            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
    function update_profile($datos){
          $idioma=$datos['idioma'];
          $fecha_nacimiento=$datos['fecha'];
			    $especialidades=$datos['especialidades'];
        	$aficiones=$datos['aficiones'];
          @session_start();
          $username=$_SESSION['user']['username'];

        	$sql = " UPDATE user SET fecha_nacimiento='$fecha_nacimiento', especialidades='$especialidades', aficiones='$aficiones', idioma='$idioma' WHERE username='$username'";

            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}

		function select_username($username){
			$sql = "SELECT username FROM user WHERE username='$username'";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
    function select_email($email){
			$sql = "SELECT email FROM user WHERE email='$email'";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
    function select_user($password){
      @session_start();
      $username=$_SESSION['user']['username'];
			$sql = "SELECT username FROM user WHERE username='$username' AND password='$password'";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
    function select_user_info($user){
      $username=$user['username'];
      $password=$user['password'];
			$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}




	}
