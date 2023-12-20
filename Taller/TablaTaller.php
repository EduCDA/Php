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
    $fichero = fopen('FicheroGuardaTaller.csv', 'r');
    echo "
    
    <table>
    <tr>
        <td>Nombre</td>
        <td>Matricula</td>
        <td>Telefono</td>
        <td>Codigo Modelo</td>
    </tr>
    ";
    $line = fgetcsv($fichero);
    while ($line != null) {
        
        echo " 
            <tr>
                <td> $line[0] </td>
                <td> $line[1] </td>
                <td> $line[2] </td>
                <td> $line[3] </td>
            </tr>";
            $line = fgetcsv($fichero);       
    }
    fclose($fichero);
    echo "</table>";
    ?>
    <button onclick="location.href='taller.php'">Volver al formulario</button> <br>
</body>

</html>