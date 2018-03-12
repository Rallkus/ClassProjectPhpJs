<?php if(isset($_SESSION['user']['idioma']) && $_SESSION['user']['idioma']=="Español"){


if(!isset($_SESSION['user']['type'])){ ?>
	<nav id="nav">
						<ul>
							<li><a href="index.php?page=homepage">Inicio</a></li>
							<li><a href="index.php?page=aboutus">Conocenos</a></li>
	            <li><a href="index.php?page=contactus">Contacto</a></li>
							<li><a href="index.php?page=controller_restaurants&op=list">Restaurantes</a></li>
							<li><a href="index.php?page=controller_cocina&op=list">Cocina</a></li>
							<li><a href="index.php?page=controller_login&op=login">Login</a></li>
						</ul>
	</nav>
<?php }elseif($_SESSION['user']['type']=="client"){ ?>
	<nav id="nav">
						<ul>
							<li><a href="index.php?page=homepage">Inicio</a></li>
							<li><a href="index.php?page=controller_profile&op=profile"><?php echo $_SESSION['user']['username']; ?></a></li>
							<li><a href="index.php?page=aboutus">Conocenos</a></li>
	            <li><a href="index.php?page=contactus">Contacto</a></li>
	            <li><a href="index.php?page=controller_recipes&op=list">Recetas más valoradas</a></li>
							<li><a href="index.php?page=controller_restaurants&op=list">Restaurantes</a></li>
							<li><a href="index.php?page=controller_cocina&op=list">Cocina</a></li>
							<li><a href="index.php?page=controller_login&op=logout">Logout</a></li>
						</ul>
	</nav>
<?php }else{?>
<nav id="nav">
						<ul>
							<li><a href="index.php?page=homepage">Inicio</a></li>
							<li><a href="index.php?page=controller_profile&op=profile"><?php echo $_SESSION['user']['username']; ?></a></li>
							<li><a href="index.php?page=aboutus">Conocenos</a></li>
	            <li><a href="index.php?page=contactus">Contacto</a></li>
	            <li><a href="index.php?page=controller_recipe&op=list">Receta</a></li>
	            <li><a href="index.php?page=controller_recipes&op=list">Recetas más valoradas</a></li>
							<li><a href="index.php?page=controller_restaurants&op=list">Restaurantes</a></li>
							<li><a href="index.php?page=controller_cocina&op=list">Cocina</a></li>
							<li><a href="index.php?page=controller_login&op=logout">Logout</a></li>
						</ul>
	</nav>
<?php }
}else{
	if(!isset($_SESSION['user']['type'])){ ?>
		<nav id="nav">
							<ul>
								<li><a href="index.php?page=homepage">Home</a></li>
								<li><a href="index.php?page=aboutus">About us</a></li>
		            <li><a href="index.php?page=contactus">Contact</a></li>
								<li><a href="index.php?page=controller_restaurants&op=list">Restaurants</a></li>
								<li><a href="index.php?page=controller_cocina&op=list">Kitchen</a></li>
								<li><a href="index.php?page=controller_login&op=login">Login</a></li>
							</ul>
		</nav>
	<?php }elseif($_SESSION['user']['type']=="client"){ ?>
		<nav id="nav">
							<ul>
								<li><a href="index.php?page=homepage">Home</a></li>
								<li><a href="index.php?page=controller_profile&op=profile"><?php echo $_SESSION['user']['username']; ?></a></li>
								<li><a href="index.php?page=aboutus">About us</a></li>
		            <li><a href="index.php?page=contactus">Contact</a></li>
		            <li><a href="index.php?page=controller_recipes&op=list">Most rated recipes</a></li>
								<li><a href="index.php?page=controller_restaurants&op=list">Restaurants</a></li>
								<li><a href="index.php?page=controller_cocina&op=list">Kitchen</a></li>
								<li><a href="index.php?page=controller_login&op=logout">Logout</a></li>
							</ul>
		</nav>
	<?php }else{?>
	<nav id="nav">
							<ul>
								<li><a href="index.php?page=homepage">Home</a></li>
								<li><a href="index.php?page=controller_profile&op=profile"><?php echo $_SESSION['user']['username']; ?></a></li>
								<li><a href="index.php?page=aboutus">About us</a></li>
		            <li><a href="index.php?page=contactus">Contact</a></li>
		            <li><a href="index.php?page=controller_recipe&op=list">Recipe</a></li>
		            <li><a href="index.php?page=controller_recipes&op=list">Most rated recipes</a></li>
								<li><a href="index.php?page=controller_restaurants&op=list">Restaurants</a></li>
								<li><a href="index.php?page=controller_cocina&op=list">Kitchen</a></li>
								<li><a href="index.php?page=controller_login&op=logout">Logout</a></li>
							</ul>
		</nav>
	<?php }
 }  ?>
