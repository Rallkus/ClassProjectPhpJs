<?php
switch($_GET['op']){
    case 'list';
            include("module/restaurants/view/list_restaurants.php");
        break;

    default;
        include("view/inc/error404.php");
        break;

}
