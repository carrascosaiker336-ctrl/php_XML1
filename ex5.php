<?php


   $name="Aureliano";
   $age = "33";


   $note=<<<XML

   <note>
       <name>{$name}</name>
       <to>Tove22222222</to>
       <age>{$age}</age>
       <from>Jani</from>
       <heading>Reminder</heading>
       <body>Do not forget me this weekend!</body>
   </note>
   XML;


   $xml = new SimpleXMLElement($note);
   $result = $xml->xpath("/note/name");


   //print_r($result);
//die;
   $mesage=<<<XML
       <message>
           Mi nombre es {$result[0]} y mi edad es {$age}
       </message>
   XML;


   $r = new SimpleXMLElement($mesage);


   header("Content-Type: application/xml; charset=UTF-8");
   echo $r->asXML();


?>
