<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>Recetas más valoradas</h3>
    	</div>
    	<div class="row">

    		<table>
                <tr>
                    <td width=125><b>Puntuation</b></th>
                    <td width=125><b>Difficulty</b></th>
                    <td width=125><b>Name</b></th>
                    <th width=350><b>Detalles</b></th>
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
                          echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
                          echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
                          echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
                          echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';echo '&nbsp;';
                          print ("<div class='recipe Button_blue' id='".$row['id']."'>Read</div>");  //READ
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
