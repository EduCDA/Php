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
            margin-bottom:10px;
        }
        body
        {
            text-align: center;
            background-color:#E6E6E6;
        }
        .case
        {
           
            margin-left:44%;
            margin-right:40%;
        }
    </style>
    
</head>
<body>
    
    <h3>Tabla de Alumnos</h3>
    <div class= 'case'>
    <?php
    try
    {
        $server = new PDO('mysql:host=localhost;dbname=alumnos', 'root', '');
        $tabla = $server->query('SELECT * FROM alumnos');
        echo "
        <table>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
            </tr>";
        while($alumno =$tabla->fetch())
        {
            echo "
            <tr>
                <td>".$alumno['Nombre']."</td>
                <td>".$alumno['Apellido']."</td>
            </tr>";
        }
        echo "
        </table>";
    }
    catch(PDOException)
    {
        echo "Fallo al conectarse con el servidor";
    }
    ?>
    
    </div>
    <button onclick="location.href='InsertarAlumnos.php'">Añadir alumnos</button> 
</body>
</html>