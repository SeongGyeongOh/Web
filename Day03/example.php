<?php
    header("Content-Type:text/html; charset=utf-8");

    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];

    echo "$name<br>$address<br>$email<br>$gender<br>";
?>