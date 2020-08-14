<?php
    header("Content-Type:text/html; charset=utf-8");
    //php를 바로 default 브라우저로 열면 값이 출력되는게 아니라 이 문서가 그대로 출력되어 보인다
    //왜냐면 php는 서버에서 작동하는 언어이기 때문
    //이를 해결하려면 php 해독기를 설치하거나 이걸 서버로 올려야함 - 닷홈에 올리자

    // form 요소로 전달된 값들 받기
    //php는 GET방식으로 전달된 값들을 $_GET이라는 이름의 ASSOC 배열에 가지고 있다!
    $name=$_GET['name'];
    $msg=$_GET['msg'];
    // 값 출력
    // !!***echo를 할 때 html이 그대로 나온다***!!
    echo "<h2>이름 : $name</h2>"; 
    echo "<p>메세지 : $msg<p>";
?>
