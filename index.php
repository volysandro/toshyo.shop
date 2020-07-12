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
session_start();
$dir    = 'products';
$files1 = scandir($dir);

$currency = "$";

for($i = 2; $i<count($files1); $i++){
    
    $name = file_get_contents("products/" . $files1[$i] . "/name.txt");
    echo $name;

    $price = file_get_contents("products/" . $files1[$i] . "/price.txt");

    echo "<br>";
    echo "<img id=\"cover\" src=\"products/" . $files1[$i] . "/img/1.png\">";
    echo "<br>";
    echo "<button>" . $currency . $price . "</button>";
    echo "<a href='product.php?id=" . $files1[$i] . "'><button>" . "More" . "</button></a>";

    echo "<br>";
}
?>

</body>
</html>