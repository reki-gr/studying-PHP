<?php
  $isDateCheck = checkdate(9, 31, 2021);

  if($isDateCheck){
    echo "유효한 날짜입니다.";
  } else {
    echo "유효하지 않은 날짜입니다.";
  }
 ?>
