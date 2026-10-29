<?php
$xml = simplexml_load_file(__DIR__ . '/biblioteca.xml'); //simplexml_load_file abre un archivo XML y lo convierte en un objeto PHP para que puedas leerlo y recorrerlo desde tu código.
$result = $xml->xpath("//libro");
?>
<table border="1">
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Precio</th>
        <th>Categoría</th>
    </tr>
    <?php
    foreach ($result as $libro) {
    echo "<tr>";
    echo "<td>$libro->titulo</td>";
    echo "<td>$libro->autor</td>";
    echo "<td>$libro->precio €</td>";
    echo "<td>{$libro['categoria']}</td>";
    echo "</tr>";
    }
    ?>
</table>