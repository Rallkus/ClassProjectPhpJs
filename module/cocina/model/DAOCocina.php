<?php
    //include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
    include($path . "model/connect.php");
	class DAOCocina{

		function select_all_cocina(){
			$sql = "SELECT * FROM cocina ORDER BY nombre ASC";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function select_cocina($id){
			$sql = "SELECT * FROM cocina WHERE id='$id'";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
    function insert_compra(){
          @session_start();
          $user=$_SESSION['user']['username'];
        	$sql = " INSERT INTO compra (usuario, fecha)"
        		. " VALUES ('$user', now())";

            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
    function insert_like($id){
          @session_start();
          $user=$_SESSION['user']['email'];
        	$sql = " INSERT INTO me_gusta (id, id_cocina)"
        		. " VALUES ('$user', $id)";
            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
    function delete_like($id){
          @session_start();
          $user=$_SESSION['user']['email'];
        	$sql = " DELETE FROM me_gusta WHERE id_cocina='$id' AND id='$user'";
            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
    function select_like($id){
          @session_start();
          $user=$_SESSION['user']['email'];
        	$sql = " SELECT id, id_cocina FROM me_gusta WHERE id_cocina='$id' AND id='$user'";
            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
    function insert_linea($datos){
          $product=$datos['Product'];
			    $quantity=$datos['Qty'];
          $id=$datos['id'];

        	$sql = " INSERT INTO linea (id_producto, precio)"
        		. " SELECT id, precio FROM cocina WHERE nombre='$product'";

            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
    function update_linea($datos){
			    $quantity=$datos['Qty'];

        	$sql = " UPDATE linea SET id_compra=(SELECT MAX(id) FROM compra), cantidad='$quantity', precio=precio*'$quantity' WHERE id=(SELECT MAX(aa.id) FROM (SELECT * FROM linea) AS aa)";

            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
    function get_id_compra(){

      $sql = " SELECT MAX(id) FROM compra";


            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
	}
