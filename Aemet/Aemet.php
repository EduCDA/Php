<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    table,td
        {
            padding: 10px;
            border-color: black;
            border-style: solid ;
            border-width: 3px;
            border-collapse: collapse;
            width: 200px;
            height: 30px;
            margin-bottom:10px;
        }
        body
        {
            background-color:#E6E6E6;
        }</style>
</head>
<body>
    
        
    <?php
    $municipio = $_POST["municipio"];
    if($municipio == 1)
    {
        $url="https://www.aemet.es/xml/municipios/localidad_28079.xml";//Madrid
    }
    else if($municipio == 2)
    {
        $url="https://www.aemet.es/xml/municipios/localidad_28074.xml";//Leganes
    }
    else if($municipio == 3)
    {
        $url="https://www.aemet.es/xml/municipios/localidad_28065.xml";//Getafe
    }
    $c = 0;
    $archivoXml = file_get_contents($url);
    $xml = simplexml_load_string($archivoXml);
    $json = json_encode($xml);
    $aemet = json_decode($json,true);
    
    echo "
    <h3>Municipio " . $aemet['nombre'] . "</h3>
   
    <table>
    <tr>
        <td>Dia</td>
        <td>Temperatura Maxima</td>
        <td>Temperatura Minima</td>
        
    </tr>";
    
    foreach($aemet['prediccion']['dia'] as $value)
    {
        echo "<tr>
                <td>".$value['@attributes']['fecha']."</td>
                <td>". $value["temperatura"]["maxima"]."</td>
                <td>" . $value["temperatura"]["minima"]."</td>
            </tr>";
        
    }
    ?>
    </table>
</body>
</html>