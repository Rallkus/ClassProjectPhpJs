<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" enctype="multipart/form-data">
        <table border='0'>
          <tr>
              <td>Email: </td>
              <td><input type="text" id="email" name="email" placeholder="email" value=""/></td>
              <td><font color="red">
                  <span id="error_email" class="error">
                  </span>
              </font></font></td>
          </tr>
          <tr>
              <td>Username: </td>
              <td><input type="text" id="username" name="username" placeholder="username" value=""/></td>
              <td><font color="red">
                  <span id="error_username" class="error">
                  </span>
              </font></font></td>
          </tr>
          <tr>
              <td>Password: </td>
              <td><input type="password" id="password" name="password" placeholder="password" value=""/></td>
              <td><font color="red">
                  <span id="error_password" class="error">
                  </span>
              </font></font></td>
          </tr>
            <tr>
                <td><button type="button" name="create" id="create">Register</button></td>
            </tr>
        </table>
    </form>
</div>
