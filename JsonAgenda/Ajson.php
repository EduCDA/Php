<?php
$fichero = fopen("JsonAgenda.csv","r");
$linea = fgets($fichero);
$datos = explode(",",$linea);

$contactos = array();
while($linea != null)
{
    $datos[0] = str_replace("\r\n","", $datos[0]);
    $datos[1] = str_replace("\r\n","", $datos[1]);
    $modulo = array(
        "Nombre" => $datos[0],
        "Telefono" => $datos[1]
    );
    $contactos[] = $modulo;
    $linea = fgets($fichero);
    $datos = explode(",",$linea);
}
echo json_encode($contactos);
?>