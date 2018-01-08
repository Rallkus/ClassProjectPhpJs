<div id="contenido">
    <form autocomplete="on" method="post" name="update_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_song&op=update">

        <h1>Modificar canción</h1>
        <table border='0'>

            <tr>
                <td>Nombre canción: </td>
                <td><input type="text" id="nom_cancion" name="nom_cancion" placeholder="nombre canción" value="<?php echo $user['nombre_cancion'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_cancion" class="error">
                        <?php
                        if(isset($error['nom_cancion'])){
                           echo $error['nom_cancion'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Álbum: </td>
                <td><input type="text" id="album" name="album" placeholder="álbum" value="<?php echo $user['album'];?>"/></td>
                <td><font color="red">
                    <span id="error_album" class="error">
                        <?php
                        if(isset($error['album'])){
                           echo $error['album'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Fecha de publicación: </td>
                <td><input type="text" id="fecha" name="fecha_publicacion" placeholder="fecha publicacion" value="<?php echo $user['fecha_publicacion_cancion'];?>"/></td>
                <td><font color="red">
                    <span id="error_fecha" class="error">
                        <?php
                        if(isset($error['fecha_publicacion'])){
                           echo $error['fecha_publicacion'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Genero: </td>
                <td>
                    <?php
                        if ($user['genero']==="Rock"){
                    ?>
                        <input type="radio" id="genero" name="genero" placeholder="genero" value="Rock" checked/>Rock
                        <input type="radio" id="genero" name="genero" placeholder="genero" value="Pop"/>Pop
                        <input type="radio" id="genero" name="genero" placeholder="genero" value="Otros"/>Otros
                    <?php
                  }else if($user['genero']==="Pop"){
                    ?>
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Rock"/>Rock
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Pop" checked/>Pop
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Otros"/>Otros
                    <?php
                  }else{
                    ?>
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Rock"/>Rock
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Pop"/>Pop
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Otros" checked/>Otros
                    <?php
                  }
                     ?>
                </td>
                <td><font color="red">
                    <span id="error_genero" class="error">
                        <?php
                        if(isset($error['genero'])){
                           echo $error['genero'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Idioma: </td>
                <?php
                    $lang=explode(":", $user['idioma_cancion']);
                ?>
                <td><select multiple size="" id="idioma" name="idioma[]" placeholder="idioma">
                    <?php
                        $busca_array=in_array("Español", $lang);
                        if($busca_array){
                    ?>
                        <option value="Español" selected>Español</option>
                    <?php
                        }else{
                    ?>
                        <option value="Español">Español</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Ingles", $lang);
                        if($busca_array){
                    ?>
                        <option value="Ingles" selected>Ingles</option>
                    <?php
                        }else{
                    ?>
                        <option value="Ingles">Ingles</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Portugues", $lang);
                        if($busca_array){
                    ?>
                        <option value="Portugues" selected>Portugues</option>
                    <?php
                        }else{
                    ?>
                        <option value="Portugues">Portugues</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Frances", $lang);
                        if($busca_array){
                    ?>
                        <option value="Frances" selected>Frances</option>
                    <?php
                        }else{
                    ?>
                        <option value="Frances">Frances</option>
                    <?php
                        }
                    ?>
                    </select></td>
                <td><font color="red">
                    <span id="error_idioma" class="error">
                        <?php
                        if(isset($error['idioma'])){
                           echo $error['idioma'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Grupo: </td>
                <td><input type="text" id="grupo" name="grupo" placeholder="grupo" value="<?php echo $user['grupo'];?>"/></td>
                <td><font color="red">
                    <span id="error_grupo" class="error">
                        <?php
                        if(isset($error['grupo'])){
                           echo $error['grupo'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Pais: </td>
                <td><select id="pais" name="pais" placeholder="pais">
                    <?php
                        if($user['country']==="España"){
                    ?>
                        <option value="España" selected>España</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Francia">Francia</option>
                    <?php
                        }elseif($user['country']==="Portugal"){
                    ?>
                        <option value="España">España</option>
                        <option value="Portugal" selected>Portugal</option>
                        <option value="Francia">Francia</option>
                    <?php
                        }else{
                    ?>
                        <option value="España">España</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Francia" selected>Francia</option>
                    <?php
                        }
                    ?>
                    </select></td>
                <td><font color="red">
                    <span id="error_pais" class="error">
                        <?php
                        // echo $error['pais']
                        ?>
                    </span>
                </font></font></td>
            </tr>


            <tr>
                <td>Instrumentos: </td>
                <?php
                    $afi=explode(":", $user['instrumentos_grupo']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("Guitarra", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "instrumento" name="instrumento[]" value="Guitarra" checked/>Guitarra
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "instrumento" name="instrumento[]" value="Guitarra"/>Guitarra
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Bajo", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "instrumento" name="instrumento[]" value="Bajo" checked/>Bajo
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "instrumento" name="instrumento[]" value="Bajo"/>Bajo
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Bateria", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "instrumento" name="instrumento[]" value="Bateria" checked/>Bateria</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "instrumento" name="instrumento[]" value="Bateria"/>Bateria</td>
                    <?php
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_instrumento" class="error">
                        <?php
                        if(isset($error['instrumento'])){
                           echo $error['instrumento'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>
            </tr>




            <tr>
                <td>Link: </td>
                <td><input type="text" id="link" name="link" placeholder="link" size="40" value="<?php echo $user['link_youtube_cancion'];?>"/></td>
                <td><font color="red">
                    <span id="error_link" class="error">
                        <?php
                        if(isset($error['link'])){
                           echo $error['link'];}
                           else {
                             echo "";
                           }
                        ?>
                    </span>
                </font></font></td>

            </tr>






            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_song&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
