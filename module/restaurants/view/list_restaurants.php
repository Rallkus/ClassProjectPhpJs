<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE RESTAURANTES</h3>
    	</div>
    	<div class="row">

    		<table>
                <tr>
                    <td width=125><b>Image</b></th>
                    <td width=125><b>Name</b></th>
                    <td width=125><b>Location</b></th>
                    <th width=350><b>Website</b></th>
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
                    	   	echo '<td width=125ç>'. $row['puntuation'] . '</td>';
                    	   	echo '<td width=125>'. $row['difficult'] . '</td>';
                    	   	echo '<td width=125>'. $row['name'] . '</td>';
                    	   	echo '<td width=350>';
                          print ("<div class='recipe Button_blue' id='".$row['id']."'>Read</div>");  //READ
                    	    //echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                    	   	//echo '<a class="Button_blue" href="index.php?page=controller_recipe&op=read&id='.$row['id'].'">Read</a>';
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

<section id="recipe_modal">
    <div id="details_recipe" hidden>
        <div id="details">
            <div id="container">
                Puntuation: <div id="puntuation"></div></br>
                Difficulty: <div id="difficulty"></div></br>
                Name of the recipe: <div id="name_recipe"></div></br>
                Number of persons: <div id="number_persons"></div></br>
                Time expected: <div id="time"></div></br>
                Vegan food: <div id="vegan"></div></br>
                Short description: <div id="description"></div></br>
                Instruction: <div id="instruction"></div></br>
                Image: <div id="image"></div>
        </div>
    </div>
</section>
