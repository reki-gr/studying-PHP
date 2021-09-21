<?php
    //패턴 대입
    $pattern = '/^[A-Za-z가-힣. ]+$/';

    $str = "안녕하세요. Hello World.";

    if(preg_match($pattern, $str, $matches)){
        echo "값 {$str}는(은) 정규 표현식에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    } else {
        echo "값에 영문, 한글 .(점) 그리고 띄어쓰기외의 문자가 있는지 확인 요망";
    }
    ?>