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
      // Check if file was uploaded without errors
      if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
          $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
          $filename = $_FILES["image"]["name"];
          $filetype = $_FILES["image"]["type"];
          $filesize = $_FILES["image"]["size"];

          // Verify file extension
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

          // Verify file size - 5MB maximum
          $maxsize = 5 * 1024 * 1024;
          if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

          // Verify MYME type of the file
          if(in_array($filetype, $allowed)){
              // Check whether file exists before uploading it
              if(file_exists("module/recipe/view/uploads/" . $_FILES["image"]["name"])){
                  echo $_FILES["image"]["name"] . " is already exists.";
              } else{
                  move_uploaded_file($_FILES["image"]["tmp_name"], "module/recipe/view/uploads/" . $_FILES["image"]["name"]);
                  echo "Your file was uploaded successfully.";
              }
          } else{
              echo "Error: There was a problem uploading your file. Please try again.";
          }
      } else{
          echo "Error: " . $_FILES["image"]["error"];
      }

                  $_POST['image'] = "module/recipe/view/uploads/" . $_FILES["image"]["name"];
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
                  if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
                      $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                      $filename = $_FILES["image"]["name"];
                      $filetype = $_FILES["image"]["type"];
                      $filesize = $_FILES["image"]["size"];

                      // Verify file extension
                      $ext = pathinfo($filename, PATHINFO_EXTENSION);
                      if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

                      // Verify file size - 5MB maximum
                      $maxsize = 5 * 1024 * 1024;
                      if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

                      // Verify MYME type of the file
                      if(in_array($filetype, $allowed)){
                          // Check whether file exists before uploading it
                          if(file_exists("module/recipe/view/uploads/" . $_FILES["image"]["name"])){
                              echo $_FILES["image"]["name"] . " is already exists.";
                          } else{
                              move_uploaded_file($_FILES["image"]["tmp_name"], "module/recipe/view/uploads/" . $_FILES["image"]["name"]);
                              echo "Your file was uploaded successfully.";
                          }
                      } else{
                          echo "Error: There was a problem uploading your file. Please try again.";
                      }
                  } else{
                      echo "Error: " . $_FILES["image"]["error"];
                  }

                              $_POST['image'] = "module/recipe/view/uploads/" . $_FILES["image"]["name"];
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
