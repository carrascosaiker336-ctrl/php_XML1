<?php
function allConections() {

    $xml = simplexml_load_file(__DIR__ . '/conections.xml');

    foreach ($xml->conection as $conection) {

        echo "Conexión: " . $conection->nombre . "<br>";
        echo "Fecha: " . $conection->fecha . "<br><br>";
    }
}
?>