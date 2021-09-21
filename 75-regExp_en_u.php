<?php
    //패턴 대입
    $pattern = '/^[A-Z]+$/';

    $str = 'TRAINER';

    if(preg_match($pattern, $str, $matches)){
        echo "값 {$str}는(은) 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    } else {
        echo "값에 영문 대문자 외의 문자가 있는지 확인 요망";
    }