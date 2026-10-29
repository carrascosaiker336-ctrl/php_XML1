<?php 
  //  require __DIR__ . "login.php";
  require "funcion_login.php";
    $user =$_GET['user']; 
    $id =$_GET['dni'];
    if(isset($user)&&isset($id)){
        login($user,$id);
        }else{
            echo "No existe";
        }
    

?>
