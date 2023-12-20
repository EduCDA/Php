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
            background-color:##F8F8FF;
        }</style>
</head>
<body>
    <?php
        $fichero = fopen('BicicletaAcc.csv','r');
        $line = fgets($fichero);
        $datos = explode(",",$line);
        echo"
    
    <table>
        " ;
        
        while($line != null)
        {
            
            echo" 
                <tr>
                <td>".$datos[1]."</td>
                <td>".$datos[14]."</td>
                <td>".$datos[9]."</td>";
            echo "</tr>";
            $line = fgets($fichero);
            $datos = explode(",",$line);
        }
        
    echo "</table>";
    fclose($fichero);
    ?>
</body>
</html>