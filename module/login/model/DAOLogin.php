<?php
    //include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
    include($path . "model/connect.php");
	class DAOLogin{
		function insert_user($datos){
          $email=$datos['email'];
			    $username=$datos['username'];
        	$password=$datos['password'];
          $type="client";

        	$sql = " INSERT INTO user (email, username, password, type, fecha_nacimiento, especialidades, aficiones, idioma)"
        		. " VALUES ('$email', '$username', '$password', '$type', '', '', '', 'ES')";

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
    function select_user($user){
      $username=$user['username'];
      $password=$user['password'];
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
