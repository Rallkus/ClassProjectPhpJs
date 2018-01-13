<div id="contenido">
  <form autocomplete="on" method="post" name="update_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_recipe&op=update">
    <h1>Modificar receta</h1>
    <table border='0'>
      <input type="hidden" name="id" value="<?php echo $recipe['id']?>">
      <tr>
        <td>Puntuation: </td>
        <td><select id="puntuation" name="puntuation" placeholder="pais">
          <?php
          switch ($recipe['puntuation']) {
            case '1':
            ?>
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            break;
            case '2':
            ?>
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '3':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3" selected>3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '4':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4" selected>4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '5':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5" selected>5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '6':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6" selected>6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '7':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7" selected>7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '8':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8" selected>8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '9':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9" selected>9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;

            default:
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>10</option>
            <?php
            break;
          }
          ?>
        </select></td>
        <td><font color="red">
          <span id="error_puntuation" class="error">
            <?php
            // echo $error['pais']
            ?>
          </span>
        </font></font></td>
      </tr>
      <tr>
        <td>Difficulty: </td>
        <td><select id="difficulty" name="difficulty" placeholder="pais">
          <?php
          switch ($recipe['difficult']) {
            case '1':
            ?>
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            break;
            case '2':
            ?>
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '3':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3" selected>3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '4':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4" selected>4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '5':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5" selected>5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '6':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6" selected>6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '7':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7" selected>7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '8':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8" selected>8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;
            case '9':
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9" selected>9</option>
            <option value="10">10</option>
            <?php
            # code...
            break;

            default:
            ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>10</option>
            <?php
            break;
          }
          ?>
        </select></td>
        <td><font color="red">
          <span id="error_difficulty" class="error">
            <?php
            // echo $error['pais']
            ?>
          </span>
        </font></font></td>
      </tr>

      <tr>
        <td>Recipe: </td>
        <td><input type="text" id="name_recipe" name="name_recipe" placeholder="nombre canción" value="<?php echo $recipe['name'];?>" readonly/></td>
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
          <td>
            <?php
            switch ($recipe['number_persons']) {
              case '1':
              ?>
              <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="1" checked/>1
              <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="2"/>2
              <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="4+"/>4+
              <?php
              break;
              case '2':
              ?>
              <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="1"/>1
              <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="2" checked/>2
              <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="4+"/>4+
              <?php
              break;

              default:
              ?>
              <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="1"/>1
              <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="2"/>2
              <input type="radio" id="number_of_persons" name="number_of_persons" placeholder="genero" value="4+" checked/>4+
              <?php
              break;
            }

            ?>
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
            <td>Estimated time: </td>
            <td><select id="hour" name="hour" placeholder="pais">
              <?php
              list($hour, $min) = explode('.', $recipe['estimated_time']);
              switch ($hour) {
                case '0':
                ?>
                <option value="0" selected>0</option>
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
                <?php
                break;
                case '1':
                ?>
                <option value="0">0</option>
                <option value="1" selected>1</option>
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
                <?php
                break;
                case '2':
                ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2" selected>2</option>
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
                <?php
                break;
                case '3':
                ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3" selected>3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12+">12+</option>
                <?php
                break;
                case '4':
                ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4" selected>4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12+">12+</option>
                <?php
                break;
                case '5':
                ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5" selected>5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12+">12+</option>
                <?php
                break;
                case '6':
                ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6" selected>6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12+">12+</option>
                <?php
                break;
                case '7':
                ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7" selected>7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12+">12+</option>
                <?php
                break;
                case '8':
                ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8" selected>8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12+">12+</option>
                <?php
                break;
                case '9':
                ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9"selected>9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12+">12+</option>
                <?php
                break;
                case '10':
                ?>
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
                <option value="10" selected>10</option>
                <option value="11">11</option>
                <option value="12+">12+</option>
                <?php
                break;
                case '11':
                ?>
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
                <option value="11" selected>11</option>
                <option value="12+">12+</option>
                <?php
                break;

                default:
                ?>
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
                <option value="12+" selected>12+</option>
                <?php
                break;
              }
              ?>
            </select> Hours &nbsp;&nbsp;&nbsp;<select id="min" name="min" placeholder="pais">
              <?php
              switch ($min) {
                case '0':
                ?>
                <option value="0" selected>0</option>
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
                <?php
                break;
                case '5':
                ?>
                <option value="0">0</option>
                <option value="5" selected>5</option>
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
                <?php
                break;
                case '10':
                ?>
                <option value="0">0</option>
                <option value="5">5</option>
                <option value="10" selected>10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <?php
                break;
                case '15':
                ?>
                <option value="0">0</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15" selected>15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <?php
                break;
                case '20':
                ?>
                <option value="0">0</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20" selected>20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <?php
                break;
                case '25':
                ?>
                <option value="0">0</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25" selected>25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <?php
                break;
                case '30':
                ?>
                <option value="0">0</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30" selected>30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <?php
                break;
                case '35':
                ?>
                <option value="0">0</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35" selected>35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <?php
                break;
                case '40':
                ?>
                <option value="0">0</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40" selected>40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <?php
                break;
                case '45':
                ?>
                <option value="0">0</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45" selected>45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <?php
                break;
                case '50':
                ?>
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
                <option value="50" selected>50</option>
                <option value="55">55</option>
                <?php
                break;

                default:
                ?>
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
                <option value="55" selected>55</option>
                <?php
                break;
              }
              ?>
            </select> minutes</td>
            <td><font color="red">
              <span id="error_time" class="error">
                <?php
                // echo $error['pais']
                ?>
              </span>
            </font></font></td>
          </tr>
          <tr>
            <td>Vegan food: </td>
            <td>
              <?php
              switch ($recipe['vegan']) {
                case 'Yes':
                ?>
                <input type="radio" id="vegan" name="vegan" placeholder="genero" value="Yes" checked/>Yes
                <input type="radio" id="vegan" name="vegan" placeholder="genero" value="No"/>No
                <?php
                break;

                default:
                ?>
                <input type="radio" id="vegan" name="vegan" placeholder="genero" value="Yes"/>Yes
                <input type="radio" id="vegan" name="vegan" placeholder="genero" value="No" checked/>No
                <?php
                break;
              }

              ?>
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
              <td><input type="text" id="description" name="description" placeholder="álbum" value="<?php echo $recipe['description'];?>"/></td>
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
                  <td>Instructions: </td>
                  <td><input type="text" id="instruction" name="instruction" placeholder="instruction" value="<?php echo $recipe['instruction'];?>"/></td>
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
                  </tr>
                  <tr>
                    <td>Image: </td>
                    <td><input type="text" id="image" name="image" placeholder="image" value="<?php echo $recipe['image'];?>"/></td>
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
                          <td><input type="submit" name="update" id="update"/></td>
                          <td align="right"><a href="index.php?page=controller_recipe&op=list">Volver</a></td>
                        </tr>
                      </table>
                    </form>
                  </div>
