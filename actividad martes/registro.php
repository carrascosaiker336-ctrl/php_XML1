<?php

include __DIR__ . "/funcion_registro.php";

if (isset($_GET['user']) && isset($_GET['dni'])) {

    $user = $_GET['user'];
    $id = $_GET['dni'];

    registro($user, $id);

} else {
    echo "No existe";
}

?>