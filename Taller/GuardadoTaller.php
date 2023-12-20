<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td
        {
            margin-left:auto;
            margin-right:auto;
            width: 200px;
            height: 50px;
            border: 2px solid #000000;
            background-color:#eab676;
        }
    </style>
</head>
<body>
    <?php
    $fichero = fopen('FicheroGuardaTaller.csv','a');
    
    $coche =$_POST["marca"];
    $nombre =$_POST["nombre"];
    $matricula =$_POST["matricula"];
    $telefono =$_POST["telefono"];
    $case =array("$nombre","$matricula","$telefono","$coche");
    fputcsv($fichero,$case,",");
    echo"
    <table>
        <tr>
            <td>Nombre</td>
            <td>Matricula</td>
            <td>Telefono</td>
            <td>Codigo Modelo</td>
        </tr>
        <tr>
            <td>".$case[0]."</td>
            <td>".$case[1]."</td>
            <td>".$case[2]."</td>
            <td>".$case[3]."</td>
        </tr>

    </table>";
    
    ?>
    <button onclick="location.href='taller.php'">Volver al formulario</button> <br>
    <button onclick="location.href='TablaTaller.php'">Ver tabla entera</button>
</body>
</html>