<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE PRODUCTOS</h3>
    	</div>
    	<div class="row">
    		<table>
                <tr>
                    <td width=125><b>Imagen</b></th>
                    <td width=125><b>Nombre</b></th>
                    <td width=125><b>Precio (€)</b></th>
                    <td width=125><b>Cantidad</b></th>
                    <th width=125 align="left"><b>Añadir al carrito</b></th>
                </tr>
                <?php
                print_r($_POST);
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">Lo siento, ha habido un error</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                          ?>
                          <td><img src="<?php echo $row['imagen']?>"width="300" height="200">
                          <?php
                          echo '<td width=125>'. $row['nombre'] . '</td>';
                          echo '<td width=125>'. $row['precio'] .'</td>';
                          echo '<td width=125><input type="text" id="'.$row['id'].'" name="cant" placeholder="" value="0" readonly/></td>';
                          echo '<td width=250><button name="'.$row['id'].'" class="button"><img src="view/img/anadir.png"></button>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.'<button name="'.$row['id'].'" class="button-"><img src="view/img/eliminar.png"></td>';
                    	   	echo '</td>'; echo '<input type="hidden" id="'.$row['id'].'precio" value="'. $row['precio'] .'"></input>';
                          echo '<input type="hidden" id="'.$row['id'].'nombre" value="'. $row['nombre'] .'"></input>';
                    	   	echo '</tr>';
                        }
                    }
                    @session_start();
                  if(isset($_SESSION['user'])){  ?>
                    <td><button type="button" name="checkout" id="checkout">Checkout</button></td>
                    <?php
                  }else{  ?>
                    <td><button type="button" name="login" id="login">Checkout</button></td>
                    <?php
                  }
                ?>
                <input type="hidden" value="<?php echo($rdo -> num_rows); ?>" id="number"></input>
            </table>
    	</div>
    </div>
</div>
