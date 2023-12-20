<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
   
    echo "
    <form method='POST' action ='Guardado.php'>
        <input type='hidden' name='type' value ='buscar'>
        <label form ='usuario'>Usuario<label><br>
        <input type'text' name='inicioUs' id='usuario'> <br>
        <label form ='contraseña'>Contraseña<label><br>
        <input type='password' name='inicioCr' id='contraseña'><br>
        
        <input type='submit' value='Iniciar sesión'>
    </form>
    <form method='POST' action ='registro.php'>
        <p>¿No te has registrado?</p>
        <input type='submit' value='Registrate'>
    </form>";
    ?>
    
</body>
</html>