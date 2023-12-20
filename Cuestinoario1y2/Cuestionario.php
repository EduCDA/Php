<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    table, td
    {
        width: 200px;
        height: 50px;
        border: 2px solid #000;
    }
    div
    {
        width: 80px;
        height: 80px;
    }
   </style>
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    $list = array("hombre","mujer");
    $genero = $_GET["genero"];
    $color = $_GET["color"];
    $recibir = $_GET["recibir"];

    echo "Tu nombre es ". $nombre." tu edad es de ".$edad." años eres ".$list[$genero]."<br>";
    echo "<style>div{background-color:$color;}</style>";
    echo  $recibir." quiero recibir notificaciones.";
    ?>
    <div>

    </div>
</body>
</html>