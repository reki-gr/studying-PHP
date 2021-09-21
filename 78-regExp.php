<?php
    $pattern = '/^(010|011|016|017|018|019)[^0][0-9]{3,4}-[0-9]{4}/';

    $str = "010-9440-5205";

    if(preg_match($pattern, $str, $matches)){
        echo "값 {$str} 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    } else {
        echo "값에 숫자외의 문자가 있는지 확인 요망";
    }
    ?>