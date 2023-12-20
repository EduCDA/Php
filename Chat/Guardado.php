<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $type = $_POST["type"];
    $condicionSesion = false;
    //Añado ususario
    if($type == "añadir")
    {
        $usuarioR = $_POST["creacionUs"];
        $contraseñaR = $_POST["creacionCr"];
        if($contraseñaR !="")
        {
            //comprobamos si el usuario no existe
            $openFichero = fopen("usuarios.csv","r");
            $existe = false;
            $line = fgets($openFichero);
            $datos = explode(",",$line);
            while($line != null)
            {
                if($usuarioR == $datos[0])
                {
                    $existe = true;
                }
                $line = fgets($openFichero);
                $datos = explode(",",$line);
            }

            fclose($openFichero);
            //Metemos el usuario
            if($existe == false)
            {
                $openFicheroAñ = fopen("usuarios.csv","a");
                $case = array($usuarioR,$contraseñaR);
                fputcsv($openFicheroAñ,$case,",");
            }
        }  
    }
    //Busco el ususario y contraseña 
    else if($type == "buscar")
    {
        session_destroy();
        $usuarioIn = $_POST["inicioUs"];
        $contraseñaIn = $_POST["inicioCr"];
        $openFichero = fopen("usuarios.csv","r");
        $line = fgets($openFichero);
        $datos = explode(",",$line);
        while($line != null)
        {echo "USUARIOIN: $usuarioIn datos[0]=$datos[0] contraseñaIn=$contraseñaIn datos[1]=$datos[1]<br>";
            if($usuarioIn == $datos[0] )
            {
                if(trim($contraseñaIn) == trim($datos[1]))
                {
                    echo "ENtré";
                    //contraseña correcta
                    $condicionSesion = true;
                    session_start();
                    $_SESSION["sesionActiva"]= $usuarioIn;
                }
            }
            $line = fgets($openFichero);
            $datos = explode(",",$line);
        }
    }
    //Aqui guardo los mesajes de los usuarios
    if($type == "enviado")
    {
        $fecha = $_POST["fecha"];
        $newMen = $_POST["mensaje"];
        $usuarioChat = $_POST["nombreUsuario"];
        $chatAdd = fopen("chat.csv","a");
        $case = array($usuarioChat,$newMen,$fecha);
        fputcsv($chatAdd,$case,",");
        echo " se a añadido corrctamente";
        header('Location:Chat.php');
        exit; 
    }
    if($condicionSesion == true)
    {
        header('Location:Chat.php');
        exit;
    }
    if($condicionSesion == false )
        {
       //     header('Location:Login.php');
            exit;
        }
    ?>
</body>
</html>