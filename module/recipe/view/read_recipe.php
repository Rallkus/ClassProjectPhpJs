<div id="contenido">
    <h1>Informacion de la receta</h1>
    <p>
    <table border='2'>
      <tr>
          <td>Puntuation: </td>
          <td>
              <?php
              if(isset($recipe['puntuation'])){
                echo $recipe['puntuation'];
              }
              else {
                echo "";
              }
              ?>
          </td>
      </tr>
      <tr>
          <td>Difficulty: </td>
          <td>
              <?php
              if(isset($recipe['difficult'])){
                echo $recipe['difficult'];
              }
              else {
                echo "";
              }
              ?>
          </td>
      </tr>
        <tr>
            <td>Nombre receta: </td>
            <td>
                <?php
                    if(isset($recipe['name'])){
                      echo $recipe['name'];
                    }
                    else {
                      echo "";
                    }
                ?>
            </td>
        </tr>





        <tr>
            <td>Number of persons: </td>
            <td>
                <?php
                if(isset($recipe['number_persons'])){
                  echo $recipe['number_persons'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>


        <tr>
            <td>Estimated time: </td>
            <td>
                <?php
                if(isset($recipe['estimated_time'])){
                  $fecha = "04/30/1973";
                  list($hour, $min) = explode('.', $recipe['estimated_time']);
                  echo $hour . " hours " . $min . " minutes";
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>Is it vegan?: </td>
            <td>
                <?php
                if(isset($recipe['vegan'])){
                  echo $recipe['vegan'];
                }
                else {
                  echo "";
                }
                ?>
            </td>

        </tr>

        <tr>
            <td>Short description: </td>
            <td>
                <?php
                if(isset($recipe['description'])){
                  echo $recipe['description'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>Instruction: </td>
            <td>
                <?php
                if(isset($recipe['instruction'])){
                  echo $recipe['instruction'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>Image: </td>
            <td>
                <?php
                if(isset($recipe['image'])){
                  echo $recipe['image'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_recipe&op=list">Volver</a></p>
</div>
