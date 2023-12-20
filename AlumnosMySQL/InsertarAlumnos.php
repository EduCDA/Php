<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
        {
            background-color:#E6E6E6;
        }
    </style>
</head>
<body>
    <?php
    echo "
    <h3>Inserta al nuevo Alumno</h3>
    <form method='POST' action ='ConexionMysql.php'>
        <label form='nombre'>Nombre:</label>
        <input type='text' name='nombre' id='nombre'>
        <label form='apellido'>Apellido:</label>
        <input type='text' name='apellido' id='apellido'>
        <input type='submit' value='añadir'><br> <br>
    </form>
    <form method='POST' action ='AlumnosMysql.php'>
        <input type='submit' value='Tabla alumnos'>
    </form>";
    ?>
</body>
</html>