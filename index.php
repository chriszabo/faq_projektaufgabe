<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FAQ</title>
</head>
<body>
<?php

include("mvc/controller.php"); 
include("mvc/model.php");
include("mvc/view.php");

$request = array_merge($_GET, $_POST);
$controller = new Controller($request);
echo $controller->display();

?>
</body>
</html>

