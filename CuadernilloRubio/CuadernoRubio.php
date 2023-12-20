<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .case
        {
            margin-top:20px; 
            margin-right:5px;
            margin-left:5px;
            height: 110px;

            background-color:#00BFFF;
            border-style:outset;
        }
        .submid
        {
            background-color: #000000;
            color:#FFFFFF;
            width:100px;
            height: 30px;   
        }
        input
        {
            margin-top:20px; 
            margin-right:5px;
            margin-left:5px;
        }
        body
        { 
            margin-left:20px;
        }
    </style>
</head>
<body>
    
    <?php
    $uno = rand(1,100);
    $dos = rand(1,100);
    $operando=rand(0,3);
    
    $array = array("+","-","*","/");
    $resultado = 0;

    echo "

    <div class='case'>
    <form method='POST' action='recogedatosCuader.php'> 
    <input type='number' name='primero' readonly  value ='$uno'>". $array[$operando]." <input type ='number' name='segundo' readonly  value='$dos'> = <input type='number' name='resultado'>
    <br>
    <input class='submid' type='submit'>
        <input type='hidden' value='$operando' name='operando'>
    
    </div>
    </form>";
  

    ?>
    
</body>
</html>