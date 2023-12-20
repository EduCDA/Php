<?php
    
    $nombre = $_POST["nombre"];
    $telefono = $_POST["numeroTf"];
    if($nombre != null && $telefono != null)
    {
        require_once __DIR__ . '/vendor/autoload.php';
        $m = new MongoDB\Client("mongodb://localhost:27017");
    
        $collection = $m->Agenda->Agenda;

        $insertOneResult = $collection->insertOne([
        'Nombre' => $nombre,
        'Telefono' => $telefono,
        ]);
        echo "Se insertaron bien los nuevos contactor <br>
        <form method='POST' action ='VerAgenda.php'>
            <input type='hidden' name='lectura' value ='on'> 
            <input type='submit' value='Ver lista'>
        </form>";
    }
    else
    {
        header('Location:IndexMongo.php');
        exit;
    }
    
   
       
    
    
    
    
?>