<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try
    {
        $server = new PDO('mysql:host=localhost;dbname=alumnos','root','');
        $tabla = $server->query('SELECT * FROM alumnos');
        $fichero = fopen("fichero.csv","w");
        while($alumno =$tabla->fetch())
        {   
            $nombre = $alumno['Nombre'];
            $apellido= $alumno['Apellido'];
            $case ="$nombre,$apellido";
           
            fwrite($fichero,$case);
        }
       
        echo "Se ha tranferido los datos de la Base de datos al fichero de csv"; 
    }
    catch(PDOException)
    {
        echo "Fallo al conectarse con el servidor";
    }
    ?>
    <button onclick="location.href='InitialSelection.php'">Ir inicio</button> 
</body>
</html>