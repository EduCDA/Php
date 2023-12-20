<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <?php
    //hidden se utiliza para poner valores y no se vean
    echo "
    <form method='POST' action ='accesomongo.php'>
        <label form ='nombre'>Nombre<label><br>
        <input type'text' name='nombre' id='nombre'> <br>

        <label form ='numeroTf'>Numero de Telefono<label><br>
        <input type='text' name='numeroTf' id='numeroTf'><br>

        <input type='submit' value='Añadir contacto'><br><br>
    </form>

    <form method='POST' action ='BuscarMongo.php'>
        <input type='submit' value='Buscar Contacto'>
    </form>";
    
    ?>

</body>
</html>