// var n=0;
// while(true){
//     n++;
//     // document.getElementById('hh')="" //동작 불가!
//     // 워커는 UI 변경작업을 할 수 없음

//     // Main Thread에게 출력을 대신 해달라고 요청해야 함
//     postMessage(n);
//     // while문은 속도가 너무 빨라 제대로 동작을 못할 수 있음
    
// }

var n=0;
function fff(){
    n++;
    postMessage(n);

    setTimeout(fff, 500); //0.5초 후에 fff() 함수 실행
}

fff();