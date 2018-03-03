<?php
if(isset($_GET['page'])){
	switch($_GET['page']){
		case "homepage";
		include("module/inicio/view/inicio.php");
		break;
		case "controller_recipe";
		include("module/recipe/controller/".$_GET['page'].".php");
		break;
		case "controller_login";
		include("module/login/controller/".$_GET['page'].".php");
		break;
		case "controller_profile";
		include("module/profile/controller/".$_GET['page'].".php");
		break;
		case "controller_cocina";
		include("module/cocina/controller/".$_GET['page'].".php");
		break;
		case "aboutus";
		include("module/aboutus/view/".$_GET['page'].".php");
		break;
		case "contactus";
		include("module/contact/".$_GET['page'].".php");
		break;
		case "404";
		include("view/inc/error".$_GET['page'].".php");
		break;
		case "503";
		include("view/inc/error".$_GET['page'].".php");
		break;
		case "controller_recipes";
		include("module/highratedRecipes/controller/".$_GET['page'].".php");
		break;
		case "controller_restaurants";
		include("module/restaurants/controller/".$_GET['page'].".php");
		break;
		default;
		include("view/inc/error404.php");
		break;
	}}
	else{
		include("module/inicio/view/inicio.php");
	}
	?>
