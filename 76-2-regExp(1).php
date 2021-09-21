<?php
    $pattern = '/^[a-zA-Z가-힣]+$/';

    $str = "안녕하세요Hello";

    if(preg_match($pattern, $str, $matches)){
        echo "값 {$str}는(은) 정규 표현식에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    } else {
        echo "값에 영문과 한글 외의 문자가 있는지 확인 요망";
    }
    ?>