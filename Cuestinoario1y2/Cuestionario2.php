<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    table, td
    {    
        margin-left:auto;
        margin-right:auto;
        width: 200px;
        height: 50px;
        border: 2px solid #000;
    }
   </style>
</head>
<body>
<?php
    $nombre = $_POST["nombre"];
    $matricula = $_POST["matricula"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $marcaArray = array("Mercedes","Honda","Ferrari","Seat");
    $marca = $_POST["marca"];
    $recibir = $_POST["recibir"];
    if(isset($_POST["mañana"]))
    {
        $mañana = $_POST["mañana"];
    }
    else
    {
        $mañana ="";
    }
    if(isset($_POST["tarde"]))
    {
        $tarde = $_POST["tarde"];
    }
    else
    {
        $tarde ="";
    }
    if(isset($_POST["noche"]))
    {
        $noche = $_POST["noche"];
    }
    else
    {
        $noche ="";
    }
    
    echo "<table> 
    <tr>
        <td>Nombre</td>
        <td>".$nombre."</td>
    </tr> 
    <tr>
        <td>Matricula</td>
        <td>".$matricula."</td>
    </tr>
    <tr>
    <td>Telefono</td>
    <td>".$telefono."</td>
    </tr> 
    <tr>
    <td>Email</td>
    <td>".$email."</td>
    </tr>
    <tr>
    <td>Marca</td>
    <td>".$marcaArray[$marca]."</td>
    </tr>
    <tr>
        <td>Usa seguro</td>
        <td>".$recibir."</td>
    </tr>
    <tr>
    <td>Hora de Llegada</td>
    <td>" .$mañana." ".$tarde." ".$noche."</td>
    </tr>
    </table>";
    ?>
    
</body>
</html>