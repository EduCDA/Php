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
            border: 2px solid #000000;
            background-color:#eab676;
        }
        
    </style>
</head>
<body>
    <?php
        $contaminantes = [
            "1" => "Dióxido de azufre",
            "38" => "Fluorescencia ultravioleta",
            "6" => "Monóxido de carbono",
            "7" => "Monóxido de nitrógeno",
            "8" => "Dióxido de nitrógeno",
            "9" => "Partículas finas",
            "10" => "Partículas gruesas ",
            "12" => "Óxidos de nitrógeno",
            "14" => "Ozono",
            "20" => "Tolueno",
            "30" => "Benceno",
            "35" => "Etilbenceno",
            "37" => "Metilbenceno",
            "38" => "Paraxileno",
            "39" => "Ortoxileno",
            "2" => "Ionización de llama",
            "43" => "Metano",
        ];
        $dictionary =  [
            '28079001' => 'Pº. Recoletos Baja.',
            '28079002' => 'Glta. de Carlos V Baja.',
            '28079003' => '',
            '28079035' => 'Pza. del Carmen',
            '28079004' => 'Pza. de España',
            '28079005' => '',
            '28079039' => 'Barrio del Pilar',
            '28079006' => 'Pza. Dr. Marañón Baja.',
            '28079007' => 'Pza. M. de Salamanca Baja.',
            '28079008' => 'Escuelas Aguirre',
            '28079009' => 'Pza. Luca de Tena Baja.',
            '28079010' => '',
            '28079038' => 'Cuatro Caminos ',
            '28079011' => 'Av. Ramón y Cajal',
            '28079012' => 'Pza. Manuel Becerra Baja.',
            '28079013' => '',
            '28079040' => 'Vallecas',
            '28079014' => 'Pza. Fdez.',
            '28079015' => 'Pza. Castilla Baja.',
            '28079016' => 'Arturo Soria',
            '28079017' => 'Villaverde Alto',
            '28079018' => 'C/ Farolillo',
            '28079019' => 'Huerta Castañeda Baja.',
            '28079020' => '',
            '28079036' => 'Moratalaz',
            '28079021' => 'Pza. Cristo Rey Baja.',
            '28079022' => 'Pº. Pontones Baja.',
            '28079023' => 'Final C/ Alcalá Baja.',
            '28079024' => 'Casa de Campo',
            '28079025' => 'Santa Eugenia Baja.',
            '28079026' => 'Urb. Embajada (Barajas) Baja.',
            '28079027' => 'Barajas',        
        ];
        

        //$dictionaryValue = $dictionary['28079001'];Ejemplo para ver el funcionamiento

        
        $fichero = fopen('horario.csv','r');
        $line = fgets($fichero);
        
        $h=00;
        $v=00;
        echo"
    <table>
        <tr>
            <td>Estacion</td>
            <td>Magnitud</td>";
            while($h < 27)
            {
                $h = $h + 1;
                $v = $h;
                echo "<td>H". $h . "</td>
                <td> V" . $v . "</td>";
            }
            
        echo "</tr>
        " ;
        
        while($line != null)
        {
            $n = 0;
            $line = fgets($fichero);
            $datos = explode(",",$line);
            $pMuestreo = explode(",",$line);
            $magnitud = explode(",",$line);
            echo" <tr>
                <td>".$dictionary[$pMuestreo[4]]."</td>
                <td>".$contaminantes[$magnitud[3]]."</td>";
                
                while($n <= 53)
                {
                    $n = $n + 1;
                    echo "<td>".$datos[$n]."</td>";
                    
                }  
            echo "</tr>";
            $line = fgets($fichero);
            $datos = explode(";",$line);
            $pMuestreo = explode(";",$line);
            $magnitud = explode(";",$line);
        }
        
    echo "</table>";
    
    fclose($fichero);
    ?>
</body>
</html>