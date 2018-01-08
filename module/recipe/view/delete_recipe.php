<div id="contenido">
    <form autocomplete="on" method="post" name="delete_recipe" id="delete_recipe" action="index.php?page=controller_recipe&op=delete&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Desea seguro borrar la receta <?php echo $_GET['id']; ?>?</h3></td>

            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="delete" id="delete">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_recipe&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>
