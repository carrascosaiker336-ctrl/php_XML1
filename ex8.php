
<?php
$libros=<<<XML
    <libros>
        <biblioteca>
            <libro categoria="informatica">
                <titulo>PHP Básico</titulo>
                <autor>Pérez</autor>
                <precio>25</precio>
            </libro>
            <libro categoria="novela">
                <titulo>La Sombra del Viento</titulo>
                <autor>Ruiz Zafón</autor>
                <precio>18</precio>
            </libro>
            <libro categoria="informatica">
                <titulo>XML en la práctica</titulo>
                <autor>García</autor>
                <precio>32</precio>
            </libro>
            <libro categoria="historia">
                <titulo>Historia de España</titulo>
                <autor>Fernández</autor>
                <precio>20</precio>
            </libro>
            <libro categoria="novela">
                <titulo>Cien años de soledad</titulo>
                <autor>García Márquez</autor>
                <precio>15</precio>
            </libro>
        </biblioteca>
    </libros>
     XML;


   $xml = new SimpleXMLElement($lobros);
   $result = $xml->xpath("/libros/biblioteca/libro");




   $r = new SimpleXMLElement($mesage);

  //$r = new SimpleXMLElement($note);


   header("Content-Type: application/xml; charset=UTF-8");
   echo $r->asXML();


?>