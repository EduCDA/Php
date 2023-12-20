<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fichero = fopen('FicheroTaller.csv','r');
    $line = fgets($fichero);
    $datos = explode(",",$line);
    echo "
    <form method='POST' action='GuardadoTaller.php'>
    <label for='nombre'>Nombre:</label>
    <input type='text' name='nombre' id='nombre' placeholder='Juan'>
    <label for='matricula'>Matricula:</label>
    <input type='text' name='matricula' id='matricula' placeholder='646468gfg'>
    <label type='telefono'>Telefono:</label>
    <input type='number' name='telefono' id='telefono' placeholder='655332210'><br>
    <label for='marca'>Marca:</label>
    <select name='marca' id='marca'>
    ";
    while($line != null)
    {
        echo"<option value='$datos[1]'>$datos[0]</option>";
        $line = fgets($fichero);
        $datos = explode(",",$line);
    }
    echo"
    <input type='submit'>
    </select>
    </form>
    ";
    ?>
    <button onclick="location.href='TablaTaller.php'">Ver tabla entera</button>
</body>
</html>