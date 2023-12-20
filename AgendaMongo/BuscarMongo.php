<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Contacto</title>
</head>
<body>
<?php
    //hidden se utiliza para poner valores y no se vean
    echo "
    <h3>Buscar Contacto<h3>
    <form method='POST' action ='VerAgenda.php'>
        <input type='hidden' name='lectura' value ='off'> 
        <label form ='nombre'>Introduce el nombre que quieras buscar<label><br>
        <input type'text' name='nombre' id='nombre'> <br>
        <input type='submit' value='Buscar'><br><br>
    </form>

    <form method='POST' action ='IndexMongo.php'>
        <input type='submit' value='Añadir contacto'>
    </form>";
    
    ?>
</body>
</html>