<?php
require_once('persona.php');
require_once('animal.php');
require_once('gato.php');
//creando nuestro objeto 
print("<h1>OBJETO persona1 </h1>");
$persona1 = new Persona("anthony");
$persona1->setPaterno("cardenas");
print($persona1->getNombre());
print("<br>");
print($persona1->getPaterno());
print("</br>");
print("<h1>OBJETO animal1 </h1>");
$animal1 = new Animal($persona1,"miau");
print($animal1->getNombre());
print("<br>");
print($animal1->persona->nombre);

print("<br>");
print("<h1>OBJETO GATO1 </h1>");
$gato1 = new Gato($persona1,"miau","20");
print($gato1->persona->nombre);
print("<br>");
print($gato1->getNombre());
print("<br>");
print($gato1->getTamaniobigotes());