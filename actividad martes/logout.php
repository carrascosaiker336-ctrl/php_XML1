<?php

include __DIR__ . "/funcion_logout.php";

if (isset($_GET['logout']) && isset($_GET['user']) && isset($_GET['dni'])) {

    $logout = $_GET['logout'];
    $user = $_GET['user'];
    $id = $_GET['dni'];

    $_SESSION['logout_message'] = logout($logout, $user, $id)
        ? "Usuario eliminado"
        : "No se encontró el usuario";

    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'), true, 303);
    exit;

} else {
    echo $_SESSION['logout_message'] ?? "No existe";
    unset($_SESSION['logout_message']);
}

?>