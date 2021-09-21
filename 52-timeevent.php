<?php
  //독자분들의 현재 예제 테스트 가능한 시작 시간, 종료 시간을 입력해주세요.

  //시작 시간 설정 2021년 9월 13일 15시 23분 0초
  $startTime = mktime(15, 23, 0, 9, 13, 2021);

  //종료 시간 설정 2021년 9월 13일 15시 30분 0초
  $endTime = mktime(15, 30, 0, 9, 13, 2021);

  $nowTime = time();

    echo date('Y-m-d-h-i-s', time())."<br>";

  if($nowTime >= $startTime && $nowTime <= $endTime){
      echo "현재 이벤트에 참여할 수 있는 시간입니다.";
  } else {
      echo "이벤트 시작 전이거나 종료되었습니다.";
  }
 ?>
