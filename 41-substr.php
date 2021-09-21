<?php
  $str = "everdevel";

  //0자리 시작하여 5글자를 자른 후 subStr에 대입
  $cutStr = substr($str, 0, 5);

  echo $cutStr.'<br>';

  //끝에서 5번째 자리부터 시작해서 5글자를 subStr2에 대입
  $cutStr2 = substr($str, -5, 5);

  echo $cutStr2.'<br>';

  //자를 문자열 수에 -로 시작하면 자르기 시작할 앞자리부터 글자를 없앰
  $cutStr3 = substr($str, 5, -3);

  echo $cutStr3;
 ?>
