<?php
    header("Content-Type:text/html; charset=utf-8");

    $name=$_GET['name'];
    $email=$_GET['email'];
    $message=$_GET['message'];

    $message=nl2br($message);

    echo "$name <br>$email<br>$message";
?>