<?php

$divide = "--------<br><br>";


// 1. for loop
    $arr=[1, 2, 3, 4, 5, 6];
    for($i=0; $i< count($arr); $i++){
        echo $i.' : '.$arr[$i].'<br>';
    }

echo $divide;

// 2. foreach - js의 for of와 유사
    foreach($arr as $value){
        echo $value."<br>";
    }

echo $divide;

// 3. while : 
    /*
    while (반복조건){
        실행문;
        증감식;
    }
    */

    $num=1; // 반복조건 초기화
    $sum=0;
    while($num <=100){
        $sum += $num;
        $num++;
    }

    echo $sum;

?>