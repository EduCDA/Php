<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .case
        {
            overflow:auto;
            border-color: rgb(0, 0, 0);
            border: 3px;
            border-style: solid;
            border-radius: 10%;
            background-color: rgb(255, 255, 255);
            width: 400px;
            height: auto;
            padding-left: 1%;
            padding-right: 1%;
            margin-left:1%;
        }
        .text
        {
            margin-left:2%;
            margin-bottom:1%;
        }
        .mensaje
        {
            border: 2px;
            border-style: solid;
            border-color: rgb(0, 0, 0);
            width: 350px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $openChat = fopen("chat.csv","r");
    $line = fgets($openChat);
    $datos = explode(",",$line);
    $us =  $_SESSION["sesionActiva"];
    $fecha = date('Y/m/d h:i:sa');
    echo "
    
    <div class='text'>
    <h2>Chat de Eduardo Corpa del Álamo</h2>
    <form method='POST' action ='Login.php'>
    <label form ='sesion'>".$us.": </label>
    <button id='sesion' onclick='session_destroy();'>Cerrar sesion</button>
    </form>
    <form method='POST' action ='Guardado.php'>
        <input type='hidden' name='type' value='enviado'>
        <input type='hidden' name='nombreUsuario' value='$us'>
        <input type='hidden' name='fecha' value='$fecha'>
        <input class='mensaje' type='text' name='mensaje'>
        <input type='submit' value='Enviar'>
    </form>
    
    </div>
    ";

    echo"
    <div class='case'>
    <p>Chat, escribe tu comentario o habla con la gente</p>
    ";
    
    while($line != null)
    {
        echo "<p>".$datos[0].":".$datos[1]. $datos[2] ." <p>";
        $line = fgets($openChat);
        $datos = explode(",",$line);
    }
    echo "</div>
   
    ";
    ?>
</body>
</html>