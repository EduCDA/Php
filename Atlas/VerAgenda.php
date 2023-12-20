<?php
    //Esto para acceder a local:
    // $m = new MongoDB\Client("mongodb://localhost:27017");
    //Si pide que sea con su ip poner  $m = new MongoDB\Client("mongodb://SUIP");
    //Para acceder a servidor es te metes en mongoAtlas y le das a connectar 
    //$m = new MongoDB\Client ("mongodb+srv://edu:mono123456@cluster0.dyzwxbt.mongodb.net/?retryWrites=true&w=majority");

    //Para acceder directamente a la base de datos si hay mas es: NOMBREBASEDEDATOS esto especifica cual hay que poner
    //$m = new MongoDB\Client ("mongodb+srv://edu:mono123456@cluster0.dyzwxbt.mongodb.net/NOMBREBASEDEDATOS?retryWrites=true&w=majority");

    // Si me pide que me conecte a la suya es lo mismo pero cambio la url seria lo siguiente y poner el suyo
    //$m = new MongoDB\Client(urldelprofe);
    $lectura = $_POST["lectura"];
    require_once __DIR__ . '/vendor/autoload.php';
    $m = new MongoDB\Client ("mongodb+srv://edu:mono123456@cluster0.dyzwxbt.mongodb.net/NOMBREBASEDEDATOS?retryWrites=true&w=majority");
    $collection = $m->Agenda->Agenda;

    if($lectura == "on")
    {
        $datos = $collection->find();

        foreach ($datos as $obj) {
            echo $obj['Nombre'].'<br>'.$obj['Telefono'].'<br>';
        }
    }
    else if($lectura == "off")
    {
        $nombre = $_POST["nombre"];

        $datos = $collection ->find(array('Nombre'=> $nombre));
        foreach ($datos as $obj) {
            echo $obj['Nombre'].'<br>'.$obj['Telefono'].'<br>';
        }
    }

    echo"
        <form method='POST' action ='IndexMongo.php'>
            <input type='submit' value='Añadir contacto'>
        </form>
        <form method='POST' action ='BuscarMongo.php'>
            <input type='submit' value='Buscar Contacto'>
        </form>";
?>