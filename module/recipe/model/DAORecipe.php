<?php
    include("model/connect.php");

	class DAORecipe{
		function insert_recipe($datos){
          $puntuation=$datos['puntuation'];
			    $difficulty=$datos['difficulty'];
        	$name_recipe=$datos['name_recipe'];
        	$number_of_persons=$datos['number_of_persons'];
        	$hour=$datos['hour'];
        	$min=$datos['min'];
        	$vegan=$datos['vegan'];
        	$description=$datos['description'];
        	$instruction=$datos['instruction'];
          $image=$datos['image'];
          $time=$hour . "." . $min;


        	$sql = " INSERT INTO recipe (puntuation, difficult, name, number_persons, estimated_time, vegan, description, instruction, image)"
        		. " VALUES ('$puntuation', '$difficulty', '$name_recipe', '$number_of_persons', '$time', '$vegan', '$description','$instruction', '$image')";

            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}

		function select_all_recipes(){
			$sql = "SELECT * FROM recipe ORDER BY name ASC";

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

		function update_recipe($datos){
      $id=$datos['id'];
      $puntuation=$datos['puntuation'];
      $difficulty=$datos['difficulty'];
      $name_recipe=$datos['name_recipe'];
      $number_of_persons=$datos['number_persons'];
      $hour=$datos['hour'];
      $min=$datos['min'];
      $vegan=$datos['vegan'];
      $description=$datos['description'];
      $instruction=$datos['instruction'];
      $image=$datos['image'];
      $time=$hour . "." . $min;

        	$sql = " UPDATE recipe SET puntuation='$puntuation', difficult='$difficulty', name='$name_recipe', number_persons='$number_of_persons', estimated_time='$time', vegan='$vegan',"
        		. " description='$description', instruction='$instruction', image='$image' WHERE id='$id'";
            $conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}

		function delete_recipe($id){
			$sql = "DELETE FROM recipe WHERE id='$id'";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
    function delete_all(){
			$sql = "DELETE FROM recipe";

			$conexion = connect::con("taste");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}
