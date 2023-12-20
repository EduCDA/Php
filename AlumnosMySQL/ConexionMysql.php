<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    $server = new PDO('mysql:host=localhost;dbname=alumnos', 'root', '');
    $añadir = $server->exec('INSERT INTO alumnos(Nombre,Apellido) VALUES ("'.$nombre . '" , "' . $apellido .'")');
    echo "
        <h3>Se han insertado los datos correctamente</h3>
    ";
    ?>
    <button onclick="location.href='AlumnosMysql.php'">Ver tabla alumnos</button> 
    <button onclick="location.href='InsertarAlumnos.php'">Añadir alumnos</button> 
</body>
</html>