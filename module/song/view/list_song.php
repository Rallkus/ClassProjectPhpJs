<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE CANCIONES</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_song&op=create"><img src="view/img/anadir.png"></a></p>
        <p><a href="index.php?page=controller_song&op=deleteAll"><img src="view/img/eliminar.png"></a></p>

    		<table>
                <tr>
                    <td width=125><b>Nombre canción</b></th>
                    <td width=125><b>Álbum</b></th>
                    <td width=125><b>Grupo</b></th>
                    <th width=350><b>Accion</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUNA CANCIÓN</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                          print_r($row);
                    	   	echo '<td width=125>'. $row['nombre_cancion'] . '</td>';
                    	   	echo '<td width=125>'. $row['album'] . '</td>';
                    	   	echo '<td width=125>'. $row['grupo'] . '</td>';
                    	   	echo '<td width=350>';
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_song&op=read&id='.$row['nombre_cancion'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_song&op=update&id='.$row['nombre_cancion'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_song&op=delete&id='.$row['nombre_cancion'].'">Delete</a>';
                          echo '&nbsp;';
                    	   	echo '<a class="Button_orange" href="index.php?page=controller_song&op=youtube&id='.$row['nombre_cancion'].'">Youtube</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>
