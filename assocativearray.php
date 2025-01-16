<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country: </label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php
    // associative array = An array made of key=>value pairs

    $capitals = array("USA"=>"Washington D.C.",
                                   "Japan"=>"Kyoto",
                                   "Australia"=>"Canberra",
                                   "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]];    
    echo"The capital is {$capital}";
?>