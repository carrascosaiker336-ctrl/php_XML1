<?php   
session_start();

function logout($logout, $user, $id) {
    if ($logout !== "logout") {
        return false;
    }
    $indice = 0;
    foreach ($xml->user as $usuario) {
        if (strcasecmp((string) $usuario->nombre, $user) === 0
            && (string) $usuario->dni === $id) {
            unset($xml->user[$indice]);
            echo "usuario eliminado";
            return true;
        }
        $indice++;
    }

    return false;
}
?>