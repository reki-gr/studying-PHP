<?php
  $str = "123문자열";
  echo "데이터형 변경 전의 데이터형 ".gettype($str)." 값은 {$str}"."<br>";

  $str = (int) $str;
  echo "데이터형 변경 후의 데이터형 ".gettype($str)." 값은 {$str}"."<br>";

  $str = array();
  $str[1] = "문자열123";
  echo "데이터형 변경 전의 데이터형 ".gettype($str[1])." 값은 {$str[1]}"."<br>";

  $str[1] = (int) $str[1];
  echo "데이터형 변경 후의 데이터형 ".gettype($str[1])." 값은 {$str[1]}";
  // 숫자가 뒤에 위치하면 int 데이터형으로 변환해도 대입되는 값이 0

  ?>
