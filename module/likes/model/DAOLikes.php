<?php
    //include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
    include($path . "model/connect.php");
	class DAOLikes{
    function select_likes($id){
			$sql = "SELECT * FROM me_gusta WHERE id='$id'";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
    function select_all_likes(){
      @session_start();
      $user=$_SESSION['user']['email'];
			$sql = "SELECT * FROM me_gusta a, cocina b, user c  WHERE a.id_cocina=b.id AND a.id=c.email AND c.email='$user' ORDER BY nombre ASC";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
  }
