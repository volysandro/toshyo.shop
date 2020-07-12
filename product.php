<!DOCTYPE html>
<html>

<?php
$username = "Toshyo"
?>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php
        echo $username;
    ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php 

    $id = $_GET["id"];
    echo $id;

    $dir = "products/" . $id;
    $dir_img = $dir . "/img/";
    $imgs = scandir($dir_img);

    echo "<br>";

    for($i = 2; $i<count($imgs); $i++){
    
    echo "<img id=\"imgcontent\" src=\"" . $dir_img . $imgs[$i] . "\">";



    }


?>


</body>

</html>