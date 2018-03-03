<h2>Son estos los productos que tenías seleccionados?</h2>
    <table id="cart" border="1" style="width:100%">
         <thead>
              <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Qty</th>
                  <th>Total</th>
                  <th></th>
             </tr>
         </thead>
         <tbody id="cartBody">

         </tbody>

    </table>
    <?php
    @session_start();
    if(isset($_SESSION['user'])){  ?>
    <td><button type="button" name="comprar" id="comprar">Comprar</button></td>
    <?php
    }else{  ?>
    <td><button type="button" name="login" id="login">Comprar</button></td>
    <?php
    }
