<?php
function allUsers() {

    $xml = simplexml_load_file(__DIR__ . '/login.xml');

    foreach ($xml->user as $usuario) {

        echo "Nombre: " . $usuario->nombre . "<br>";
        echo "Password: " . $usuario->password . "<br>";
        echo "Fecha: " . $usuario->fecha . "<br><br>";
    }
}
?>