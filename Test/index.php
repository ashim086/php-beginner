<?php
$insert = false;

echo 'This is php form you are welcomed';

$server = 'localhost';
$username = 'root';
$password = '';
//sql connect
$con = mysqli_connect($server, $username, $password);
//body post accept
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
//Inserting into sql
$sql = "INSERT INTO `phpfirst`.`phpfirst`(`name`, `email`, `password`, `number`) VALUES ('$name', '$email', '$password', '$number');";

// Execute the query
if ($con->query($sql) == true) {
    // echo "Successfully inserted";
    // Flag for successful insertion 
    $insert = true;
} else {
    echo "ERROR: $sql <br> $con->error";
}
$con->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post" onsubmit="return validateform()">
        <div id="signup">
            <h1>Fill up form</h1>
            <input type="text" name="name" id="name" placeholder="enter your name"></input>
            <div id="text_error"></div>
            <input type="email" name="email" id="email" placeholder="enter your email"></input>
            <div id="mail_error"></div>
            <input type="password" name="password" id="password" placeholder="enter your password"></input>
            <input type="number" name="number" id="number" placeholder="enter your number"></input>
            <button type="submit">submit</button>
        </div>
    </form>
    <script>
        function validateform() {
            let isvalid = true;
            const validatename = document.getElementById('name').value.trim();
            if (!validatename) {
                document.getElementById('text_error').textContent = 'username cannot be empty complete it asap';
                isvalid = false;
            }
            const validateemail = document.getElementById('email').value.trim();
            if (!validateemail) {
                document.getElementById("mail_error").textContent = "enter your mail";
                isvalid = false;
            }
            return isvalid;
        }
    </script>
</body>

</html>