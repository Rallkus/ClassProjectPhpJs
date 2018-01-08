<?php
    include("model/connect.php");
	class DAOSong{
		function insert_song($datos){
			    $song=$datos['nom_cancion'];
        	$album=$datos['album'];
        	$fecha_publicacion=$datos['fecha_publicacion'];
        	$genero=$datos['genero'];
        	$idioma=$datos['idioma'];
        	$grupo=$datos['grupo'];
        	$pais=$datos['pais'];
        	$instrumento=$datos['instrumento'];
          $link=$datos['link'];
          $inst='';
        	foreach ($datos['instrumento'] as $indice) {
        	    $inst=$inst."$indice:";
        	}
          $language='';
        	foreach ($datos['idioma'] as $indice) {
        	    $language=$language."$indice:";
        	}


        	$sql = " INSERT INTO cancion (nombre_cancion, album, fecha_publicacion_cancion, genero, idioma_cancion, grupo, pais_grupo, instrumentos_grupo, link_youtube_cancion)"
        		. " VALUES ('$song', '$album', '$fecha_publicacion', '$genero', '$language', '$grupo', '$pais', '$inst', '$link')";

            $conexion = connect::con("canciones");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}

		function select_all_songs(){
			$sql = "SELECT * FROM cancion ORDER BY nombre_cancion ASC";

			$conexion = connect::con("canciones");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function select_song($song){
			$sql = "SELECT * FROM cancion WHERE nombre_cancion='$song'";

			$conexion = connect::con("canciones");
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}

		function update_song($datos){
      $song=$datos['nom_cancion'];
      $album=$datos['album'];
      $fecha_publicacion=$datos['fecha_publicacion'];
      $genero=$datos['genero'];
      $idioma=$datos['idioma'];
      $grupo=$datos['grupo'];
      $pais=$datos['pais'];
      $instrumento=$datos['instrumento'];
      $link=$datos['link'];
      $inst='';
      foreach ($datos['instrumento'] as $indice) {
          $inst=$inst."$indice:";
      }
      $language='';
      foreach ($datos['idioma'] as $indice) {
          $language=$language."$indice:";
      }

        	$sql = " UPDATE cancion SET nombre_cancion='$song', album='$album', fecha_publicacion_cancion='$fecha_publicacion', genero='$genero', idioma_cancion='$language', grupo='$grupo',"
        		. " pais_grupo='$pais', instrumentos_grupo='$inst', link_youtube_cancion='$link' WHERE nombre_cancion='$song'";

            $conexion = connect::con("canciones");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}

		function delete_song($song){
			$sql = "DELETE FROM cancion WHERE nombre_cancion='$song'";

			$conexion = connect::con("canciones");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
    function delete_all(){
			$sql = "DELETE FROM cancion";

			$conexion = connect::con("canciones");
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}
