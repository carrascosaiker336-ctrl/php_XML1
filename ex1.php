<?php 
    $note=<<<XML
    <note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Do not forget me this weekend!</body>
    </note>
    XML;

    $xml = new SimpleXMLElement($note);
    header('Content-Type: text/xml');
    echo $xml->asXML();
    //php -S 0.0.0.0:8000 -t /workspaces/php_XML1
    

?>
