<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" enctype="multipart/form-data">
        <table border='0'>
          <!-- aficiones, datepicker, cambiar usuario, cambiar password, cambiar email, especialidades (pasta, verduras, carne, pescado) -->
          <?php print_r($_SESSION); ?>
          <tr>
              <td>Fecha de publicación: </td>
              <td><input type="text" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="fecha_nacimiento" value="<?php echo $_SESSION['user']['fecha_nacimiento']?>" readonly/></td>
              <td><font color="red">
                  <span id="error_fecha" class="error">
                  </span>
              </font></font></td>
          </tr>
          <tr>
            <?php if($_SESSION['user']['idioma']=="Español"){
              ?>
              <td>Idioma</td>
          <?php   }else{
            ?>
            <td>Language</td>
          <?php }
          ?>

            <td><select id="idioma" name="idioma" placeholder="pais">
            <?php if($_SESSION['user']['idioma']=="Español"){ ?>
                  <option value="Español" selected>Español</option>
                  <option value="Inglés">Inglés</option>
            <?php } else { ?>
                  <option value="Español">Español</option>
                  <option value="Inglés" selected>Inglés</option>
            <?php } ?>
            </select></td>

          </tr>
          <tr>
              <td>Especialidades: </td>
              <?php
                  $especialidad=explode(",", $_SESSION['user']['especialidades']);
              ?>
              <td><select multiple size="" id="especialidades" name="especialidades[]" placeholder="especialidades">
                  <?php
                      $busca_array=in_array("Pasta", $especialidad);
                      if($busca_array){
                  ?>
                      <option value="Pasta" selected>Pasta</option>
                  <?php
                      }else{
                  ?>
                      <option value="Pasta">Pasta</option>
                  <?php
                      }
                  ?>
                  <?php
                      $busca_array=in_array("Verduras", $especialidad);
                      if($busca_array){
                  ?>
                      <option value="Verduras" selected>Verduras</option>
                  <?php
                      }else{
                  ?>
                      <option value="Verduras">Verduras</option>
                  <?php
                      }
                  ?>
                  <?php
                      $busca_array=in_array("Pescado", $especialidad);
                      if($busca_array){
                  ?>
                      <option value="Pescado" selected>Pescado</option>
                  <?php
                      }else{
                  ?>
                      <option value="Pescado">Pescado</option>
                  <?php
                      }
                  ?>
                  <?php
                      $busca_array=in_array("Carne", $especialidad);
                      if($busca_array){
                  ?>
                      <option value="Carne" selected>Carne</option>
                  <?php
                      }else{
                  ?>
                      <option value="Carne">Carne</option>
                  <?php
                      }
                  ?>
                  </select></td>
              <td><font color="red">
                  <span id="error_especialidad" class="error">
                  </span>
              </font></font></td>
          </tr>
          <tr>
              <td>Aficiones: </td>
              <?php
                  $afi=explode(",", $_SESSION['user']['aficiones']);
              ?>
              <td>
                  <?php
                      $busca_array=in_array("Cantar", $afi);
                      if($busca_array){
                  ?>
                      <input type="checkbox" id= "aficiones" name="aficiones[]" value="Cantar" checked/>Cantar
                  <?php
                      }else{
                  ?>
                      <input type="checkbox" id= "aficiones" name="aficiones[]" value="Cantar"/>Cantar
                  <?php
                      }
                  ?>
                  <?php
                      $busca_array=in_array("Bailar", $afi);
                      if($busca_array){
                  ?>
                      <input type="checkbox" id= "aficiones" name="aficiones[]" value="Bailar" checked/>Bailar
                  <?php
                      }else{
                  ?>
                      <input type="checkbox" id= "aficiones" name="aficiones[]" value="Bailar"/>Bailar
                  <?php
                      }
                  ?>
                  <?php
                      $busca_array=in_array("Cocinar", $afi);
                      if($busca_array){
                  ?>
                      <input type="checkbox" id= "aficiones" name="aficiones[]" value="Cocinar" checked/>Cocinar</td>
                  <?php
                      }else{
                  ?>
                  <input type="checkbox" id= "aficiones" name="aficiones[]" value="Cocinar"/>Cocinar</td>
                  <?php
                      }
                  ?>
              </td>
              <td><font color="red">
                  <span id="error_aficiones" class="error">
                  </span>
              </font></font></td>
          </tr>
            <tr>
                <td><button type="button" name="profile" id="profile">Actualizar</button></td>
                <td align="right"><a href="index.php?page=controller_profile&op=change_name">Cambiar nombre de usuario</a></td>
                <td align="right"><a href="index.php?page=controller_profile&op=change_password">Cambiar contraseña</a></td>
                <td align="right"><a href="index.php?page=controller_profile&op=change_email">Cambiar email</a></td>
            </tr>
        </table>
    </form>
</div>
