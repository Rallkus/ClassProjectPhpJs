$(document).ready(function() {
  try{
  var login = document.getElementById('login');
  var checkout = document.getElementById('checkout');
  var cart = [];
  var number=parseInt(document.getElementById("number").value, 10);
  //localStorage.clear();

  $(function () {
    if (localStorage.cart)
    {
      // load cart data from local storage
      cart = JSON.parse(localStorage.cart);
      for(var l=1;l<=number;l++){
        var name = document.getElementById(l+"nombre").value;
        for (var i in cart) {
          if(cart[i].Product == name)
          {
            document.getElementById(l).value = cart[i].Qty;
            break;
          }
        }

      }

      //showCart();  // display cart that is loaded into cart array
    }
  });


  function addToCart(j) {
    var price = parseFloat(document.getElementById(j+"precio").value)  // get selected product's price
    var name = document.getElementById(j+"nombre").value;  // get product name
    var qty = document.getElementById(j).value;// get quantity
    // update Qty if product is already present
    for (var i in cart) {
      if(cart[i].Product == name)
      {
        if(qty==0){
          deleteItem(i);
        }else{
          cart[i].Qty = qty; } // replace existing Qty
          saveCart();
          return;
        }
      }
      if(qty===0){
        return;
      }

      var item = { Product: name,  Price: price, Qty: qty };
      cart.push(item);
      saveCart();
      //showCart();
    }

    function saveCart() {
      if (window.localStorage)
      {
        localStorage.cart = JSON.stringify(cart);
      }
    }
    function deleteItem(index){
      cart.splice(index,1); // delete item at index
      //showCart();
      saveCart();
    }
    /*function showCart() {
    if (cart.length == 0) {
    $("#cart").css("visibility", "hidden"); // hide table that shows cart
    return;
  }

  $("#cart").css("visibility", "visible");
  $("#cartBody").empty();  // empty tbody of table
  for (var i in cart) {
  var item = cart[i];
  var row = "<tr><td>" + item.Product + "</td><td>" +
  item.Price + "</td><td>" + item.Qty + "</td><td>"
  + item.Qty * item.Price + "</td><td>"
  + "<button onclick='deleteItem(" + i + ")'>Delete</button></td></tr>";
  $("#cartBody").append(row);
}
}*/




$(".button").click(function() {
  var id = $(this).attr('name'); // $(this) refers to button that was clicked
  document.getElementById(id).value =parseInt(document.getElementById(id).value, 10)+ 1;
  addToCart(id);
});
$(".button-").click(function() {
  var id = $(this).attr('name'); // $(this) refers to button that was clicked
  if(parseInt(document.getElementById(id).value, 10)>0){
    document.getElementById(id).value =parseInt(document.getElementById(id).value, 10)- 1;
    addToCart(id);
  }

});
try{


  login.onclick = function() {
    var number=document.getElementById("number").value();
    alert(number);
  }}catch(err){

  }
  try{


    checkout.onclick = function() {
      if(cart.length ===0){
        alert("No tienes nada seleccionado");
      }else{
        window.location.href = "index.php?page=controller_cocina&op=carrito";
      }    
      //TODO ver los elementos que valen más de 0 y añadirlos al carrito
      for (var j in cart) {
        console.log(cart[j].Price + cart[j].Product + cart[j].Qty);
      }
    };
  }catch(err){

  }
}catch(err){

}
});
