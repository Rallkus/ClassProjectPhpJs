<?php
    //include("model/connect.php");
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
    include($path . "model/connect.php");
	class DAORecipe{

		function select_all_recipes(){
			$sql = "SELECT * FROM recipe ORDER BY puntuation DESC";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function select_recipe($id){
			$sql = "SELECT * FROM recipe WHERE id='$id'";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}

	}
