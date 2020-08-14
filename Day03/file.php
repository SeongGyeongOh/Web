<?php
    header("Content-Type:text/html; charset=utf-8");

    // file은 데이터라기 보다는 데이터 덩어리다 - header/body
    // body: tmp라는 임시저장소에 저장
    // header: 파일을 설멍하는 header는 php에 도착 - $_FILES라는 배열변수에 저장됨!
        // $_FILES라는 배열은 5칸으로 구성 : 1.type / 2.name / 3.size / 4.error / 5.tmp_name****
    
    $file=$_FILES['file']; //'file'이라는 이름으로 넘어온 파일을 연관배열로 받음 - 현재 $file은 연관배열임!!
    //전송된 파일명
    $src_name=$file['name'];
    //전송된 파일의 타입
    $file_type=$file['type'];
    //전송된 파일의 사이즈
    $size=$file['size'];
    //임시저장소에 저장된 진짜 파일의 경로
    $tmp_name=$file['tmp_name'];

    //임시저장소를 옮길 영구저장소 위치 지정
    $dstName="./file/".date('Ymdhis').".jpg";
    //임시저장소에 있는 파일을 영구저장하기 위해 이동
    move_uploaded_file($tmp_name, $dstName);

    echo "$src_name<br>$file_type<br>$size<br>$tmp_name";
    
?>