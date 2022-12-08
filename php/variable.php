<?php

// 변할 수 있는 데이터를 저장하는 공간
// php에서는 상수 개념보다는 변수 개념을 대부분 사용
// 변수명 앞에 숫자 및 특수문자 사용 불가
// 변수명은 대소문자 구별
// 권장사항 : 스네이크케이스 사용 예)php_lecture
// 변수명은 $로 시작한다

$num = 3;
$str = 'string';
echo  "\$num의 값은 " .$num; // php에서 원시데이터를 조합할때 마침표(.)를 사용한다.
echo $str;
?>