<?php
    header("Content-Type:text/html; charset=utf-8");

    $name=$_GET['name'];
    $email=$_GET['email'];

    // echo "$name <br> $email 등록등록";
    // 이렇게 하면 html페이지가 없어지고, 본 php페이지로 바뀐다
    // 기존 페이지의 일부에 에코된 메세지를 보여주고 싶다면??
    //  ->echo를 이용해 기존 페이지를 모두 작성해야함!
    echo ("

        <html>
            <head>
                <title>Without AJAX</title>
                <meta charset='utf-8'>
            </head>

            <body>
                <h3>회원가입 페이지</h3>
                
                <form action='./noAjax.php' method=GET'>
                    <input type='text' name='name' value='$name'><br>
                    <input type='text' name='email' value='$email'><br>
                    <input type='submit'> 
                </form>

                <hr>
                <textarea cols='50' rows='3'>$name $email 등록되었습니다.</textarea>
            </body>
        </html>  
    ");
?>