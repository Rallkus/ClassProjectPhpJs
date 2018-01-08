<div id="contenido">
    <form autocomplete="on" method="post" name="delete_user" id="delete_user" action="index.php?page=controller_song&op=deleteAll&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Desea seguro borrar todas las canciones?</h3></td>

            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="deleteAll" id="deleteAll">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_song&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>
