<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <label name="label">username</label>
    <input type="text" placeholder="username" name="username">
    <label>passsword</label>
    <input type="password" placeholder="password" required name="pasword">
    <button type="submit">submit</button>
</form>

</body>
</html>
<?php
echo "{$_POST["username"]}<br>";
echo "{$_POST["pasword"]}<br>";
?>