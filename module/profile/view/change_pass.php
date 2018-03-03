<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" enctype="multipart/form-data">
        <table border='0'>
          <tr>
              <td>Antigua contraseña: </td>
              <td><input type="text" id="oldPass" name="oldPass" placeholder="oldPass" value=""/></td>
              <td><font color="red">
                  <span id="error_oldPass" class="error">
                  </span>
              </font></font></td>
          </tr>
          <tr>
              <td>Nueva contraseña: </td>
              <td><input type="text" id="pass" name="pass" placeholder="pass" value=""/></td>
              <td><font color="red">
                  <span id="error_pass" class="error">
                  </span>
              </font></font></td>
          </tr>
            <tr>
                <td><button type="button" name="change_pass" id="change_pass">Change!</button></td>
                <td></td>
                <td><a href="index.php?page=controller_profile&op=profile">Volver</p></td>
            </tr>
        </table>
    </form>
</div>
