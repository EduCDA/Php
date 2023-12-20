<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    $fichero = fopen("fichero.txt","r");//ponemos la direccion de nuestro fichero y luego esta el modo,r leer,w escribir y a+ añadir.
    $line = fgets($fichero);//lee la linea cada vez que se ejecuta,cada vez que se ejecuta pasa a la siguiente linea.
    $datos = explode(",",$linea);//Este formato identifica que el espacio es una variable por ejemplo: carlos,18,677433344 
    //cada coma pasaria como si fuera un array en posicion.
    echo ("Nombre: " . $datos[0] . "Edad: " . $datos[1] . "Telefono: " . $datos[2]);//Asi saco los datos 
    */
    $fichero = fopen("fichero.csv","a");
    
    $nombre =$_POST["nombre"];
    $edad =$_POST["edad"];
    $telefono= $_POST["telefono"];

    $case = array($nombre,$edad,$telefono);
    fputcsv($fichero,$case,",");

    echo "Se ha enviado al fichero <br>     <br> 
    "
    ?>
     <button onclick="location.href='Agenda.php'">Ver Agenda</button><br><br> 
     <button onclick="location.href='PhpFicheros.php'">Añadir Contacto</button>
</body>
</html>