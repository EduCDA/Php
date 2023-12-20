<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>

    </style>
</head>
<body>
    <?php
    echo "
    <form method='POST' action ='Guardado.php'>
        <input type='hidden' name='type' value= 'añadir'>
        <label form ='usuario'>Usuario<label><br>
        <input type ='text' name='creacionUs' id='usuario'><br>
        <label form ='contraseña'>Contraseña<label><br>
        <input type ='password' name='creacionCr' id='contraseña'><br>
        <input type ='submit' value='Registrarme'>
    </form>
    
    <form method='POST' action ='Login.php'>
        <p>¿Tienes ya cuenta?</p>
        <input type='submit' value='Inicio sesion'>
    </form>";
    ?>
</body>
</html>