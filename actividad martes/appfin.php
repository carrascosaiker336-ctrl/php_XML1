<?php
$execute = $_GET['action'];
include "funcion_login.php";
include  __DIR__ . "/funcion_registro.php";
include __DIR__ . "/funcion_logout.php";
include __DIR__ . "/funcion_all_users.php";
include __DIR__ . "/funcion_all_conection.php";

switch($execute){
    case "login":
        $user =$_GET['user']; 
        $id =$_GET['password'];
        if(isset($user)&&isset($id)){
            login($user,$id);
            }else{
                echo "No existe";
            }
            break;
    case "registrar":
        if (isset($_GET['user']) && isset($_GET['password'])) {

            $user = $_GET['user'];
            $id = $_GET['password'];

            registro($user, $id);

        } else {
            echo "No existe";
            
        }
        break;
    case "logout":

        if (isset($_GET['user']) && isset($_GET['password'])) {

            $user = $_GET['user'];
            $id = $_GET['password'];

            if (logout($user, $id)) {
                echo "Usuario eliminado";
            } else {
                echo "No se encontró el usuario";
            }

        } else {
            echo "No existe";
        }
        break;
    case "allUsers":
        allUsers();
        break;
    case "allConections":
        allConections();
        break;
}
?>