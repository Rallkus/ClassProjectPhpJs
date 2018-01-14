<?php
    session_start();
    if ((isset($_GET['page'])) && ($_GET['page']==="controller_song") ){
		include("view/inc/top_page_song.php");
	}else if((isset($_GET['page'])) && ($_GET['page']==="controller_recipe") ){
    include("view/inc/top_page_recipe.php");
  }else if(!(isset($_GET['page'])) || ($_GET['page']==="homepage") ){
    include("view/inc/top_page_home.php");
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
    <div id="menu">
		<?php
		    include("view/inc/menu.php");
		?>
    </div>
    <div id="">
    	<?php
		    include("view/inc/pages.php");
		?>
        <br style="clear:both;" />
    </div>
    <div id="footer">
	    <?php
	        include("view/inc/footer.php");
	    ?>
    </div>
</div>
<?php
    include("view/inc/bottom_page.php");
?>
