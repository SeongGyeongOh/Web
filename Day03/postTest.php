<?php
    header("Content-Type:text/html; charset=utf-8");
    //post방식으로 보낸 값들은 $_POST 배열변수에 저장됨

    
    $name=$_POST['name'];
    $password=$_POST['pw'];
    $gender=$_POST['rg'];
    $message=$_POST['msg'];
    $car=$_POST['selected'];

    // textarea에서 보낸 메세지는 줄바꿈 문자를 \n로 가지고 있다
    // 그래서, 브라우저에서 제대로 출력하려면 \n를 <br>로 변경해야 한다..
    // $message=str_replace('\n', '<br>', $message);
    // 하지만!php에는 이걸 변경해주는 함수가 따로 내장되어 있다
    $message=nl2br($message);

    echo "<h2>$name</h2>";
    echo "<h4>$password</h4>";
    echo "<h4>$gender</h4>";
    echo "<h4>$message</h4>";
    echo "<h4>$car</h4>";

    //배열로 전달된 fruit[]는?
    $fruit=$_POST['fruit']; //!! $fruit는 배열임!!
    //php에서 배열의 길이값을 알아내는 함수가 있다
    echo "<h4>";
    $num=count($fruit);
    for($i=0;$i<$num;$i++){
        echo $fruit[$i];
    }
    echo "</h4>";

    $secret=$_POST['secret'];
    echo "$secret";

?>