<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" enctype="multipart/form-data" onsubmit="return validate();" action="index.php?page=controller_recipe&op=create">
        <h1>New recipe</h1>
        <table border='0'>
          <tr>
              <td>Puntuation: </td>
              <td><select id="puntuation" name="puntuation" placeholder="pais">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  </select></td>
              <td><font color="red">
                  <span id="error_puntuation" class="error">
                      <?php
                       if(isset($error['puntuation'])){
                         echo $error['puntuation'];
                       }
                       else {
                         echo "";
                       }
                      ?>
                  </span>
              </font></font></td>
          </tr>
          <tr>
              <td>Difficulty: </td>
              <td><select id="difficulty" name="difficulty" placeholder="pais">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  </select></td>
              <td><font color="red">
                  <span id="error_difficulty" class="error">
                      <?php
                      if(isset($error['difficulty'])){
                        echo $error['difficulty'];
                      }
                      else {
                        echo "";
                      }
                      ?>
                  </span>
              </font></font></td>
          </tr>
            <tr>
                <td>Receta: </td>
                <td><input type="text" id="name_recipe" name="name_recipe" placeholder="canción" value=""/></td>
                <td><font color="red">
                    <span id="error_recipe" class="error">
                        <?php
                        if(isset($error['name_recipe'])){
                           echo $error['name_recipe'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td>Number of persons: </td>
                <td><input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="1" checked/>1
                  <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="2"/>2
                  <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="4+"/>4+
                    </td>
                <td><font color="red">
                    <span id="error_persons" class="error">
                        <?php
                        if(isset($error['persons'])){
                           echo $error['persons'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td>Time expected: </td>
                <td><select id="hour" name="hour" placeholder="pais">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12+">12+</option>
                  </select> Hours &nbsp;&nbsp;&nbsp;<select id="min" name="min" placeholder="pais">
                      <option value="0">0</option>
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                      <option value="25">25</option>
                      <option value="30">30</option>
                      <option value="35">35</option>
                      <option value="40">40</option>
                      <option value="45">45</option>
                      <option value="50">50</option>
                      <option value="55">55</option>
                    </select> Minutes</td>
                <td>
                  <td></td>
                  <td><font color="red">
                    <span id="error_time" class="error">
                        <?php
                        if(isset($error['time'])){
                           echo $error['time'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td>Vegan food: </td>
                <td><input type="radio" id="vegan" name="vegan" placeholder="genero" value="Yes" />Yes
                  <input type="radio" id="vegan" name="vegan" placeholder="genero" value="No" checked/>No
                    </td>
                <td><font color="red">
                    <span id="error_vegan" class="error">
                        <?php
                        if(isset($error['vegan'])){
                           echo $error['vegan'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Short description: </td>
                <td><input type="text" id="description" name="description" placeholder="description" value=""/></td>
                <td><font color="red">
                    <span id="error_description" class="error">
                        <?php
                        if(isset($error['description'])){
                           echo $error['description'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td>Instruction: </td>
                <td><input type="text" id="instruction" name="instruction" placeholder="ingredient" value=""/></td>
                <td><font color="red">
                    <span id="error_instruction" class="error">
                        <?php
                        if(isset($error['instruction'])){
                           echo $error['instruction'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr><tr>
                <td>Image: </td>
                <td><input type="file" id="image" name="image" placeholder="image" value=""/></td>
                <td><font color="red">
                    <span id="error_image" class="error">
                        <?php
                        if(isset($error['image'])){
                           echo $error['image'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_recipe&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
