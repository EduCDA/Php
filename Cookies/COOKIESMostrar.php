<?php
    $categoria = $_POST['cookie'];

    setcookie('categoria',$categoria);//creamos la cookie con el nombre de esta, con la variable que le da su valor
    
    header('Location: COOKIES.php');//aqui lo que hacemos es irnos directamente al otro archivo
?>
