<?php

echo 'lesson 18=associative array <br>';
$arr = array('this ', 'that ', 'what');
foreach ($arr as $value) {
    echo "$value";
}
$favcol = array('shubham' => 'red', 'rohan' => 'green', 8 => 'this');
foreach ($favcol as $key => $value) {
    echo "<br>favourite color $value";
    /*First create an associative array */

    $student = array(
        "Maths" => 56,
        "Physics" => 70,
        "Chemistry" => 94,
        "English" => 83,
        "Computer" => 58
    );

    /* Loop through array using foreach */

    echo "Looping using foreach: \n";
    foreach ($student as $subject => $marks) {
        echo "<br> Student got " . $marks . " in " . $subject . "\n";
    }
}
