<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td
        {
            border-color: black;
            border-style: solid ;
            border-width: 3px;
            border-collapse: collapse;
            width:20px;
            width: 200px;
            height: 30px;
            margin-bottom:10px;
        }
        body
        {
            text-align: center;
            background-color:#E6E6E6;
        }
    </style>
</head>
<body>
    <table>
            <tr>
                <td>Nombre</td>
                <td>Capital</td>
                <td>Link Google Maps</td>
            </tr>
    <?php
    $url= "https://restcountries.com/v3.1/all";
    $json = file_get_contents($url);
    $paises = json_decode($json,true);
    $vacio = "no contiene capital";
    //echo $paises['name'];
    foreach($paises as $value)
    {
        echo "<tr> 
        <td> ".$value["name"]["common"]."</td>";
        if(isset($value['capital'][0]))//para comprobar si existe
        {
            echo "<td>".$value['capital'][0]."</td>";
        }
        else
        {       
             echo"<td>".$vacio."</td>";
        }
        echo "<td> <a href ='".$value['maps']['googleMaps']."'>".$value['maps']['googleMaps']."</a></td> </tr>";
    }
    ?>
    </table>
</body>
</html>