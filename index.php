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
$dir    = 'products';
$files1 = scandir($dir);

for($i = 2; $i<count($files1); $i++){
    
    $file = file_get_contents("products/" . $files1[$i] . "/name.txt");
    echo $file;

    echo "<br>";
    echo "<img id=\"cover\" src=\"products/" . $files1[$i] . "/img/1.png\">";
    echo "<br>";
    echo "<br>";

}
?>

</body>
</html>