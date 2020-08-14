<?php
    header("Content-Type:text/html; charset=utf-8");

    //여러 파일을 선택해 보냈기 때문에 지금 $files는 배열변수임!!!
    $files=$_FILES['file'];

    //선택된 파일의 개수
    $fileNum=count($files['name']);

    for($i=0;$i<$fileNum;$i++){
        $srcName=$files['name'][$i]; //원본 파일명
        $tmpName=$files['tmp_name'][$i];//임시 저장소 경로
        $type=$files['type'][$i];
        $size=$files['size'][$i];

        echo "$srcName<br>$tmpName<br>$type<br>$size";
        echo "<br>---------------------------<br>";

        $dstName="./file/".date("Ymdhis").$srcName;
        move_uploaded_file($tmpName, $dstName);
    }
    
?>