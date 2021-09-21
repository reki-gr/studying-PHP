<?php

$b = include('./testpage.php');

echo $b; //100 출력됨

return; //실행 중지되고 종료됨.

echo '실행될까?'; //당연히 출력되지 않음.

?>