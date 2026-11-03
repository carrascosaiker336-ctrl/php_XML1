<?php
session_start();

function login($user, $id)
{
    $xml = simplexml_load_file(__DIR__ . '/login.xml');
    $result = $xml->xpath("//user");
    $bool = false;

    foreach ($result as $usuario) {
        if ($usuario->nombre == $user && $usuario->password == $id) {
            echo "Usuario y contraseña correctos";
            $bool = true;
            break;
        }
    }

    if ($bool == false) {
        echo "Usuario incorrecto";
    }
}