<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE RECETAS</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_recipe&op=create"><img src="view/img/anadir.png"></a></p>
        <p><a href="index.php?page=controller_recipe&op=deleteAll"><img src="view/img/eliminar.png"></a></p>

    		<table>
                <tr>
                    <td width=125><b>Nombre</b></th>
                    <td width=125><b>Álbum</b></th>
                    <td width=125><b>Grupo</b></th>
                    <th width=350><b>Accion</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUNA RECETA</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                          print_r($row);
                    	   	echo '<td width=125>'. $row['puntuation'] . '</td>';
                    	   	echo '<td width=125>'. $row['difficult'] . '</td>';
                    	   	echo '<td width=125>'. $row['name'] . '</td>';
                    	   	echo '<td width=350>';
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_recipe&op=read&id='.$row['id'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_recipe&op=update&id='.$row['id'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_recipe&op=delete&id='.$row['id'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>
