<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre;
    $apellido;

    //DatosFichero.csv

    $fichero = fopen("fichero.csv","r");
    $line = fgets($fichero);
    $datos = explode(",",$line);
    $count = 0;
    while($line != null)
    {
        $nombre = $datos[0];
        $arrayNombre[$count] = $nombre;
        $apellido =  $datos[1];
        $arrayApellido[$count] = $apellido;
        $count = $count + 1; 

        $line = fgets($fichero);
        $datos = explode(",",$line);
    }
    fclose($fichero);
    
    $server = new PDO('mysql:host=localhost;dbname=alumnos', 'root', '');
    $borrar = $server->exec('DELETE FROM alumnos WHERE 1');
    for($i = 0; $i < count($arrayNombre);$i = $i + 1)
    {
       $n = $arrayNombre[$i];
       $a = $arrayApellido[$i];

        $añadir = $server->exec('INSERT INTO alumnos(Nombre,Apellido) VALUES ("'.$n . '" , "' . $a .'")');
        
    }
    echo "
        <h3>Se han insertado los datos correctamente de Csv a la base de datos</h3>
    ";
    ?>
    <button onclick="location.href='InitialSelection.php'">Ir inicio</button> 
</body>
</html>