<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td
        {
            margin-left:auto;
            margin-right:auto;
            width: 200px;
            height: 50px;
            border: 2px solid #000000;
            background-color:#eab676;
        }
        .titulo
        {
            
            text-align:center;
        }
        .fondoDiv
        {
            padding-top:10px;
            padding-bottom: 100px;
            background-color:#2596be;
            width:800px;
            height:450px;
            margin-left:auto;
            margin-right:auto;
        }
        .boton
        {
            margin-left:390px;
        }
    </style>
</head>
<body>
    <?php
    /*
    $fichero = fopen("fichero.txt","r");//ponemos la direccion de nuestro fichero y luego esta el modo,r leer,w escribir y a añadir.
    $line = fgets($fichero);//lee la linea cada vez que se ejecuta,cada vez que se ejecuta pasa a la siguiente linea.
    $datos = explode(",",$line);//Este formato identifica que el espacio es una variable por ejemplo: carlos,18,677433344 
    //cada coma pasaria como si fuera un array en posicion.
    echo ("Nombre: " . $datos[0] . "Edad: " . $datos[1] . "Telefono: " . $datos[2]);//Asi saco los datos 
    */
    $fichero = fopen("fichero.csv","r");
    $line = fgets($fichero);
    $datos = explode(",",$line);
    echo"
    <div class='fondoDiv'>
    <div>
    <h2 class='titulo'>Agenda</h2>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Telefono</td>
        </tr>
        " ;
        while($line != null)
        {
           echo" <tr>
                <td>".$datos[0]."</td>
                <td>".$datos[1]."</td>
                <td>".$datos[2]."</td>
            </tr>";
            $line = fgets($fichero);
            $datos = explode(",",$line);
        }
        
    echo "</table>";
    ;
    
    
    ?>
     <button class='boton' onclick="location.href='PhpFicheros.php'">Añadir Contacto</button>
</body>
</html>