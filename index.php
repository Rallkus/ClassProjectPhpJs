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
  <div id="nav">
  <?php
      include("view/inc/menu.php");
  ?>
  </div>
  <div class="header">
<a href="#default" class="logo">Taste</a>
<div class="header-right">
  <a href="index.php?page=homepage">Home</a>
  <a href="index.php?page=contactus">Contact</a>
  <a href="index.php?page=controller_restaurants&op=list">Restaurants</a>
</div>
</div>
    <div id="">
    	<?php
		    include("view/inc/pages.php");
		?>
    </div>
					<div class="row 200%">
						<div class="12u">

							<!-- Contact -->
								<section>
									<h2 class="major"><span>Get in touch</span></h2>
									<ul class="contact">
										<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
										<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
										<li><a class="icon fa-instagram" href="#"><span class="label">Instagram</span></a></li>
										<li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
										<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
									</ul>
								</section>

						</div>
					</div>


</div>
<?php
    include("view/inc/bottom_page.php");
?>
