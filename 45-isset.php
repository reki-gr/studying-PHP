<?php
  if (isset($str)){
      echo "변수 str이 존재합니다.";
  } else {
      echo "변수 str이 존재하지 않습니다.";  //boolean 데이터형인 거짓 false를 반환
  }

  echo "<br>";

  $str = "string";

  if(isset($str)){
      echo "변수 str이 존재합니다.";
  } else {
      echo "변수 str이 존재하지 않습니다.";  //boolean 데이터형인 참 true를 반환
  }
 ?>
