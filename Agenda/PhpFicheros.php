<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "
    <h3>Añade el nuevo numero para la agenda</h3>
    <form method='POST' action='GuardarContact.php'> 
        
        <label for='nombre'>Nombre:</label>
        <input type='name' name='nombre'  id='nombre'><br><br>

        <label for='edad'>Edad:</label>
        <input type='number' name='edad' id='edad'><br><br>

        <label for='telefono'>Telefono:</label>
        <input type='number' name='telefono' id='telefono'><br><br>
        <input class='submid'value='Añadir conctacto' type='submit'><br><br>
        
    
    </form>
    "
    ?>
     <button onclick="location.href='Agenda.php'">Ver Agenda</button>
</body>
</html>