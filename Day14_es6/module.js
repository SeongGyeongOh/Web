function show(){
    document.write('show');
    alert('show');
}

// 다른곳에서 show()를 사용하게 하려면 추출(export)을 해야 함
// export 할 때 꼭 대표 지정을 하나 해줘야 함(여러개를 추출할 수도 있으니까)
export default show; //default 키워드를 가진개 문서에 하나는 꼭 있어야 함

//여러 개를 export 할 수도 있음
// 단, 한 개의 문서에 default 키워드는 하나밖에 안됨
// 그리고 default가 아닌 export 함수는 키워드가 function 앞에 가있어야함
export function aaa(){
    alert('2nd');
}

export const num=100;
export let age=29;


