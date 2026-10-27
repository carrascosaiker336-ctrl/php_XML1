<?PHP

$nombre = $_GET['nombre'] ?? '';
$edad = $_GET['edad'] ?? '';

$prueba = <<<XML
<prueba>
    <apellidos>Turegano</apellidos>
</prueba>
XML;

   $xml = new SimpleXMLElement($prueba);
   $xml -> addChild("name", $nombre);
   $xml -> addChild("edad", $edad);

header('Content-Type: application/xml; charset=UTF-8');
echo $xml->asXML();