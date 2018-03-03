<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" enctype="multipart/form-data">
        <h1>Log in</h1>
        <table border='0'>
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
                <td><button type="button" name="login" id="login">Login</button></td>
                <td align="right"><a href="index.php?page=controller_login&op=create">No tienes una cuenta? Regístrate</a></td>
            </tr>
        </table>
    </form>
</div>
