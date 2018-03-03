var cart = [];
$(document).ready(function() {
  try{
    var login = document.getElementById('login');
    var comprar = document.getElementById('comprar');
    $(function () {
      if (localStorage.cart)
      {
        cart = JSON.parse(localStorage.cart);
        var row="";
        var item="";
        for (var i in cart) {
          item = cart[i];
          row = "<tr><td>" + item.Product + "</td><td>" +
          item.Price + "</td><td>" + item.Qty + "</td><td>"
          + item.Qty * item.Price + "</td></tr>";
          $("#cartBody").append(row);
        }
      }
    });


  }catch(err){

  }try{
    comprar.onclick = function() {
      console.log({cart : cart});
      //TODO enviar los datos por post y meterlos en la base de datos
      //var data_to_send = $.serialize(cart);

$.ajax({
    type: "POST",
    url: "module/cocina/controller/controller_cocina.php?op=comprar",
    data: {cart : cart},
    success: function(data){
      console.log(data);
      alert("Gracias por la compra");
      localStorage.clear();
      window.location.href = "index.php?page=homepage"
    }
});
    }
  }catch(err){

  }
  try{
    login.onclick = function() {
      alert("Necesitas haber iniciado sesión para realizar esta operación");
      window.location.href = "index.php?page=controller_login&op=login";
    }
  }catch(err){

  }
});
