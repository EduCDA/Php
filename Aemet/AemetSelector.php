<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "
    <form method='POST' action ='Aemet.php'>
    <label for='municipio'>Elige Municipio</label><br>
    <select id='municipio' name='municipio'>
      <option value='1'>Madrid</option>
      <option value='2'>Leganes</option>
      <option value='3'>Getafe</option>
    </select>
    <input type='submit' value='ver'>
    </form>";
    
    ?>
</body>
</html>