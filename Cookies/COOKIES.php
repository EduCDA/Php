<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    echo"
    <form method='POST' action ='COOKIESMostrar.php'>
        <select name='cookie' id='cookie'>
            <option value='pantalon'>Pantalon</option>
            <option value='camiseta'>Camiseta</option>
        </select>
        <input type='submit' value='enviar'><br><br>
    </form>
    ";
    $fichero = fopen('cookieRopa.csv','r');
    $leer = fgets($fichero);
    $dato = explode(',',$leer);
    if(isset($_COOKIE['categoria']))
    {
        $ropa = $_COOKIE['categoria'];
        $count =0;
        while($leer != null)
        {
            $count = $count + 1;
            if($ropa == 'pantalon')
            {
                if(0 < $count && $count < 4)
                {
                    echo "<h3>La cookie tiene la categoria = " .  $ropa . " la talla es de " . $dato[0] . "cm el color es: " . $dato[1] . "</h3>";
                }
            }
            else if($ropa == 'camiseta')
            {
                if(3 < $count )
                {
                    echo "<h3>La cookie tiene la categoria = " .  $ropa . " la talla es de " . $dato[0] . "cm el color es: " . $dato[1] . "</h3>"; 
                }
            }
            $leer = fgets($fichero);
            $dato = explode(',',$leer);
        }
        
        
    }
    ?>
</body>
</html>