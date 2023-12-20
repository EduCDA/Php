<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div 
        {
            height: 150px;
            width: 200px;    
        }
    </style>
</head>
<body>
    <?php 
    $bandera = $_GET["opciones"];//Cogemos el numero de nuestra opcion elegida depende de cual llegara el numero de nuestra array y pillara dicho numero
    $case = array("/españa.png","/portugal.png","/suecia.png");
    echo  "<style>div{ background-image:url($case[$bandera]);}</style>";
    ?>
    <div>
    </div>
</body>
</html>