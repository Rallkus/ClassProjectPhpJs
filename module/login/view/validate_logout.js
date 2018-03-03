var email="";
var username="";
var password="";
var data="";
var dataTosend="";
var caract="";
var check=true;
$(document).ready(function () {
  try{
    var logout = document.getElementById('logout');
    var redirectHome=document.getElementById('home');
    dataTosend='logout='+true;
    logout.onclick = function() {
      $.ajax({
        type: "POST",
        url: "module/login/controller/controller_login.php?op=logout",
        data: dataTosend,
        datatype :'json',
        success: function(data){
          console.log(data);
          window.location.href = "index.php?page=homepage";
        }
  });
    }
    redirectHome.onclick = function(){
      window.location.href = "index.php?page=homepage";
    }
    }
    catch(err){
    }
  });
