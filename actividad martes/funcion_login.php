<?php
session_start();

function login($user, $id)
{
    $xml = simplexml_load_file(__DIR__ . '/login.xml');
    $result = $xml->xpath("//user");
    $bool = false;

    foreach ($result as $usuario) {
        if ($usuario->nombre == $user && $usuario->dni == $id) {
            echo "Usuario y DNI correctos";
            $_SESSION['nombre'] = (string) $usuario->nombre;
            $bool = true;
            break;
        }
    }

    if ($bool == false) {
        echo "Usuario incorrecto";
    }
}