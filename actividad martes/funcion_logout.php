<?php

function logout($user, $id) {
    // conexion de los archivos XML
    $entrada = simplexml_load_file(__DIR__ . '/login.xml');
    $salida = simplexml_load_file(__DIR__ . '/conections.xml');
    
    $indice = 0;

    foreach ($entrada->user as $usuario) {
        if (strcasecmp((string) $usuario->nombre, $user) === 0
            && (string) $usuario->password === $id) {
            unset($entrada->user[$indice]);
            $entrada->asXML(__DIR__ . '/login.xml');
            
            
            $ultimaconecion = $salida->addChild("conection");
            $ultimaconecion->addChild("nombre", $user);
            $ultimaconecion->addChild("fecha", date("Y-m-d H:i:s"));
            $salida->asXML(__DIR__ . '/conections.xml');
            return true;
        }

        $indice++;
        
    }
    return false;
}
?>