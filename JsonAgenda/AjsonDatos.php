<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       table,td
        {
            border-color: black;
            border-style: solid ;
            border-width: 3px;
            border-collapse: collapse;
            width:20px;
            width: 200px;
            height: 30px;
        }
    </style>
</head>
<body>
    <?php
    $url = "http://localhost/EjerciciosServidor/JsonAgenda/Ajson.php";
    $fichero = file_get_contents($url);
    $json = json_decode($fichero,true);
    echo "
    <h1>Agenda Json</h1>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Telefono</td>
        </tr>";
    foreach($json as $v)
    {
       echo"
        <tr>
            <td>" . $v['Nombre']." </td>
            <td>" . $v['Telefono'] . "</td> 
        </tr>";
        
    }
    echo "</table>";
    
    ?>
</body>
</html>