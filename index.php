<?php
    session_start();
    if((isset($_GET['page'])) && ($_GET['page']==="controller_recipe") ){
    include("view/inc/top_page_recipe.php");
  }else if(!(isset($_GET['page'])) || ($_GET['page']==="homepage") ){
    include("view/inc/top_page_home.php");
  }else if((isset($_GET['page'])) && ($_GET['page']==="contactus") ){
    include("view/inc/top_page_contactus.php");
  }else if((isset($_GET['page'])) && ($_GET['page']==="controller_recipes") ){
    include("view/inc/top_page_recipes.php");
  }else if((isset($_GET['page'])) && ($_GET['page']==="controller_login") ){
    include("view/inc/top_page_login.php");
  }else if((isset($_GET['page'])) && ($_GET['page']==="controller_profile") ){
    include("view/inc/top_page_profile.php");
  }else if((isset($_GET['page'])) && ($_GET['page']==="controller_restaurants") ){
    include("view/inc/top_page_restaurants.php");
  }else if((isset($_GET['page'])) && ($_GET['page']==="controller_cocina") ){
    include("view/inc/top_page_cocina.php");
  }else{
		include("view/inc/top_page.php");
	}
?>
<div id="wrapper">
    <div id="header">
    	<?php
    	    include("view/inc/header.php");
    	?>
    </div>
    <div id="nav">
		<?php
		    include("view/inc/menu.php");
		?>
    </div>
    <div id="">
    	<?php
		    include("view/inc/pages.php");
		?>
    </div>
    <!--<div id="footer"> -->
	    <?php
	        include("view/inc/footer.php");
	    ?>
    <!-- </div> -->
</div>
<?php
    include("view/inc/bottom_page.php");
?>
