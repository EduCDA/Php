<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //getcontent https://dog.ceo/api/breeds/image/random
    //jasondecode()
    $url = "https://dog.ceo/api/breeds/image/random";
    $json = file_get_contents($url);
    $image = json_decode($json,true);
    $img = $image['message'];
    echo "<img src='$img' alt='perritos'></img>"
    ?>
</body>
</html>