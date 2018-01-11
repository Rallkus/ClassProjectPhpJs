<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
    include($path . "module/recipe/model/DAORecipe.php");
    //include ("module/recipe/model/DAORecipe.php");
    //session_start();

    switch($_GET['op']){
        case 'list';
            try{
                $daorecipe = new DAORecipe();
            	$rdo = $daorecipe->select_all_recipes();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
            }

            if(!$rdo){
    			$callback = 'index.php?page=503';
          //echo "$_POST";
          //echo "$rdo";
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/recipe/view/list_recipe.php");
    		}
            break;

        case 'create';
           include("module/recipe/model/validate_recipe.php");

            $check = true;

            /*$error = array(
                            'nom_cancion' => '',
                            'album' => '',
                            'fecha_publicacion' => '',
                            'genero' => '',
                            'idioma' => '',
                            'grupo' => '',
                            'pais' => '',
                            'instrumento' =>'',
                            'link' => ''
                    );*/
            if (isset($_POST['create'])){

                $result=validate();
                print_r($result);
                if ($result['resultado']) {
                    $_SESSION['recipe']=$_POST;
                    try{
                        $daorecipe = new DAORecipe();
                        $rdo = $daorecipe->insert_recipe($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }

                    if($rdo){
                        echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
                        $callback = 'index.php?page=controller_recipe&op=list';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }else{
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }
                }
                else {
                    $error = $result['error'];
                }
            }
            include("module/recipe/view/create_recipe.php");
            break;

        case 'update';
              include("module/recipe/model/validate_recipe.php");

            $check = true;

            if (isset($_POST['update'])){

              $result=validate();
                if ($result['resultado']) {
                    $_SESSION['recipe']=$_POST;
                    try{
                        $daorecipe = new DAORecipe();
    		            $rdo = $daorecipe->update_recipe($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }

		            if($rdo){
            			echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_recipe&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
                else {
                    $error = $result['error'];
                    $_SESSION['recipe']=$_POST;
                    $_GET['id']=$_POST['id'];
                }
            }



            try{
                $daorecipe = new DAORecipe();
            	$rdo = $daorecipe->select_recipe($_GET['id']);
            	$recipe=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }

            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{

                $id=$_GET['id'];
        	    include("module/recipe/view/update_recipe.php");
    		}
            break;

        case 'read';
            try{
                $daorecipe = new DAORecipe();
            	$rdo = $daorecipe->select_recipe($_GET['id']);
            	$recipe=get_object_vars($rdo);

            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/recipe/view/read_recipe.php");
    		}
            break;

        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daorecipe = new DAORecipe();
                	$rdo = $daorecipe->delete_recipe($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }

            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_recipe&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }

            include("module/recipe/view/delete_recipe.php");
            break;

            case 'deleteAll';
                if (isset($_POST['deleteAll'])){
                    try{
                        $daorecipe = new DAORecipe();
                    	$rdo = $daorecipe->delete_all();
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }

                	if($rdo){
            			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_recipe&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }

                include("module/recipe/view/delete_all.php");
                break;
            case 'read_modal';
                    //echo $_GET["modal"];
                    //exit;

                    try{
                        $daorecipe = new DAORecipe();
                    	$rdo = $daorecipe->select_recipe($_GET['modal']);
                    }catch (Exception $e){
                        echo json_encode("error");
                        exit;
                    }
                    if(!$rdo){
            			echo json_encode("error");
                        exit;
            		}else{
            		    $recipe=get_object_vars($rdo);
                        echo json_encode($recipe);
                        //echo json_encode("error");
                        exit;
            		}
                    break;



        default;
            include("view/inc/error404.php");
            break;

    }
