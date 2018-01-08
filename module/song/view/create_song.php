<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" action="index.php?page=controller_song&op=create">
        <h1>Canción nueva</h1>
        <table border='0'>
            <tr>
                <td>Nombre canción: </td>
                <td><input type="text" id="nom_cancion" name="nom_cancion" placeholder="canción" value=""/></td>
                <td><font color="red">
                    <span id="error_cancion" class="error">
                        <?php
                        if(isset($error['nom_cancion'])){
                           echo $error['nom_cancion'];}
                           else {
                             echo "";
                           }
                           //print_r(validate_song($_POST('nom_cancion')));
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Álbum: </td>
                <td><input type="text" id="album" name="album" placeholder="álbum" value=""/></td>
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
                <td>Fecha publicación: </td>
                <td><input id="fecha" type="text" name="fecha_publicacion" placeholder="fecha de publicación" value=""/></td>
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
                <td><input type="radio" id="genero" name="genero" placeholder="genero" value="Rock"/>Rock
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Pop"/>Pop
                  <input type="radio" id="genero" name="genero" placeholder="genero" value="Otros" checked/>Otros</td>
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
                <td><select multiple size="4" id="idioma" name="idioma[]" placeholder="idioma">
                    <option value="Español" selected>Español</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Portugues">Portugues</option>
                    <option value="Frances">Frances</option>
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
                <td><input type="text" id= "grupo" name="grupo" placeholder="grupo" value=""/></td>
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
                    <option value="España">España</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Francia">Francia</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_pais" class="error">
                        <?php
                         //echo $error['usuario']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td>Instrumentos: </td>
                <td><input type="checkbox" id= "instrumento" name="instrumento[]" placeholder= "instrumento" value="Guitarra"/>Guitarra
                    <input type="checkbox" id= "instrumento" name="instrumento[]" placeholder= "instrumento" value="Bajo"/>Bajo
                    <input type="checkbox" id= "instrumento" name="instrumento[]" placeholder= "instrumento" value="Bateria"/>Bateria</td>
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
                <td><input type="text" id="link" name="link" placeholder="link" size="40" value=""/></td>
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
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_song&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
