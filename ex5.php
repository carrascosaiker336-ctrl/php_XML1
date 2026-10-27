<?php


   $name="iker";
   $age = "19";
   $cerebro = "101 iq";

   $note=<<<XML

   <note>
       <name>{$name}</name>
       <to>Tove22222222</to>
       <age>{$age}</age>
       <from>Jani</from>
       <heading>Reminder</heading>
       <cerebro>medida de {$cerebro}</cerebro>
       <aura> {$aura}</aura>
       <body>Do not forget me this weekend!</body>
   </note>
   XML;


   $xml = new SimpleXMLElement($note);
   $result = $xml->xpath("/note/name");


   //print_r($result);
//die;
   $mesage=<<<XML
       <message>
           Mi nombre es {$result[0]} y mi edad es {$age} mi iq es de {$cerebro} controld de aura {$aura}
       </message>
   XML;

   //$r = new SimpleXMLElement($mesage);

  $r = new SimpleXMLElement($note);


   header("Content-Type: application/xml; charset=UTF-8");
   echo $r->asXML();


?>
