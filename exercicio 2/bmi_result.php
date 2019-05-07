<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    
    <?php
if(isset($_GET["altura"]) && $_GET["peso"]){
    $altura = $_GET["altura"];
    $peso = $_GET["peso"];
    $BMI = $peso / ($altura * $altura);
    
    echo "<p>" . $BMI . "</p>";
}

    ?>
      
    </body>
</html>