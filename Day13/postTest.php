<?php
    header("Content-Type:text/html; charset=utf-8");

    $name=$_POST['name'];
    $email=$_POST['email'];

    echo "포스트 $name  $email 등록등록";
?>