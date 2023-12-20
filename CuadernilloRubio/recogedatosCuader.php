<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div
        {
            padding-top: auto;
            padding-bottom:auto;
            text-align: center;
            background-color:#00BFFF;
            border-style:outset;
            margin-top:50px;
            margin-right:auto;
            margin-left:auto;
            height:50px;
           
        }
    </style>
</head>
<body>
    <?php
    $uno = $_POST["primero"];
    $dos = $_POST["segundo"];
    $resultado = $_POST["resultado"];
    $condicion = "resultado";
    $operando =$_POST["operando"];
    if($operando == 0)
    {
        $resultadoReal = $uno + $dos;
    }
    else if($operando == 1)
    {
        $resultadoReal = $uno - $dos;
    }
    else if($operando == 2)
    {
        $resultadoReal = $uno * $dos;
    }
    else if($operando == 3)
    {
        $resultadoReal = $uno / $dos;
    }
    
    if($resultadoReal == $resultado)
    {
        $condicion = "correcta";
    }
    else
    {
        $condicion = "incorrecta";
    }
    
    echo "<div>El resutado es ". $resultadoReal ."  tu respuesta es ". $condicion ."</div>";
    if($resultadoReal == $resultado)
    {
        
        echo "
        <form method='POST' action='CuadernoRubio.php'>
        <input type='submit' value='Volver' '>
        </form>
        ";
    }
    else
    {
        echo "<button onclick='history.back()'>Volver</button>";  
    }
    
    ?>
    
    
    
</body>
</html>