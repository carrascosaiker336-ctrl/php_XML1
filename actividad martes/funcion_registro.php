<?php
session_start();

function registro($user, $id) {

    $xml = simplexml_load_file(__DIR__ . '/login.xml');
    $result = $xml->xpath("//user");
    $t = time();
    $bool = false;

    foreach ($result as $usuario) {

        if ($usuario->nombre == $user && $usuario->dni == $id) {
            echo "Usuario ya creado";
            $bool = true;
            break;
        }
    }

    if ($bool == false) {

        $nuevoUsuario = $xml->addChild("user");

        $nuevoUsuario->addChild("nombre", $user);
        $nuevoUsuario->addChild("dni", $id);
        $nuevoUsuario->addChild("fecha", date("Y-m-d", $t));
        $nuevoUsuario->addChild("logout", "");

        $xml->asXML(__DIR__ . '/login.xml');

        echo "Usuario registrado.";
    }
}
?>