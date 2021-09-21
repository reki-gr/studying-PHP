PHP의 시작

php기본 문법

<?php ?>
코딩이 끝났을때 항상 끝문장에는 ;


PHP 기초

(1) echo문으로 문자열 출력

<?php
  echo 1234;      // 숫자만 출력할때에는 따옴표를 넣지않아도 된다. 단, 문자열로 출력할경우엔 따옴표를 쓴다.
  echo "문자열";  // 문자열로 출력할때에는 따옴표를 넣는다.
    ?>

(2) print문으로 문자열 출력

<?php
  print 1234;     // echo문과 비슷하다.
  print "문자열";
 ?>

echo문과 print문의 차이

echo문은 추가로 내용을 삽입할때 쉼표","를 사용하면 되지만
print문은 쉼표","를 사용하면 에러
ex)
<?php
  echo 1234, 5678;  // 정상작동
  print 1234, 5678; // 에러
 ?>

(3) 주석

코드를 입력할 때 어떠한 코드인지 설명하거나 참조할때 사용
주석이 적용된 부분은 결과 화면에는 아무것도 표시되지 않음.
<?php
  echo "싱글 라인 주석";  //1개의 라인 주석 처리

  echo "멀티 라인 주석";
  /*echo "멀티 라인 주석(1)";
  echo "멀티 라인 주석(2)";
  echo "멀티 라인 주석(3)";*/
 ?>

tip) HTML 코드의 주석
<!-- 주석 내용 -->

(4) 변수 선언

변수는 데이터를 저장하는 공간이며 변하는 수(정보를 저장하기 위한 "컨테이너")
변하는 수? 어떠한 데이터를 변수에 대입한 후 또 다른 값을 대입 가능
변수는 변수명과 값으로 구성
변수명 앞에는 $를 붙여서 사용

$변수명 = 대입할 값;

=는 대입 연산자라고 부르며 값을 대입할 때 사용하는 연산자
<?php
  $num = 1; //변수 선언(변수명 num에 변수값 1)
 ?>
<?php
  $num = 1;
  $num = 2; //변수명이 동일한 경우 마지막에 대입된 값인 2가 num이라는 변수명의 변수값이 됨
 ?>

문자열 안에서 변수는 {}중괄호로 감싸서 사용
<?php
  $num = 4;
  echo "변수 num의 값은 {$num} 입니다.";
 ?>

함수 외부 에서 선언된 변수는 전역 범위를 가지며 함수 외부에서만 액세스할 수 있음
<?php
$x = 5; // 함수 외부에서 변수를 선언했기 때문에 전역 범위

function myTest() {
  // 변수 $x 사용불가, 함수 내부에서 변수 $x 사용시 에러
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();
  // 함수 외부이기 때문에 변수 $x 사용 가능
echo "<p>Variable x outside function is: $x</p>";
?>

함수 내부 에서 선언된 변수는 로컬 범위를 가지며 함수 내부에서만 액세스할 수 있음
<?php
function myTest() {
  $x = 5; // 로컬 범위
  // 함수 내부이기 때문에 변수 $x 사용 가능
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// 변수 $x 사용불가, 함수 외부에서 변수 $x 사용시 에러
echo "<p>Variable x outside function is: $x</p>";
?>

(5) 변수명 짓기 규칙과 값 대입하기

*변수명 짓는 규칙

1. 변수명 앞에 숫자를 사용할 수 없다.
  ex) $1num (X)

2. 언더바(_)를 제외한 특수문자를 사용할 수 없다.
  ex) $num%

3. 변수명은 대소문자를 구별한다.
  ex) $num 과 $Num 은 각각 다른 변수

4. 영어를 제외한 나머지 언어로 변수명을 사용할 수는 있지만 파일의 인코딩 방식에 의해 깨질 수 있으므로 안전하게 알파벳으로 사용.

5. 두개의 단어를 붙여서 사용할때에는 언더바(_)를 사용하거나 두 번째 오는 단어의 앞글자를 대문자로 표기. (카멜 표기법 - 프로그래머간의 약속)
  ex) school_student or schoolStudent

tip - 문자열 속에서 같은 따옴표("",'')를 사용할 경우에는 따옴표 앞에 \(역슬래시)를 사용
  ex)
<?php
$str = '선생님은 말씀하셨다. \'여기까지 시험범위입니다.\''; // (O)
$str = '선생님은 말씀하셨다. '여기까지 시험범위입니다.'';   // (X)
$str = "선생님은 말씀하셨다. \"여기까지 시험범위입니다.\""; // (O)
$str = "선생님은 말씀하셨다. "여기까지 시험범위입니다."";   // (X)
$str = '선생님은 말씀하셨다. "여기까지 시험범위입니다."';   // (O) 각각 다른 따옴표는 사용 가능
$str = "선생님은 말씀하셨다. '여기까지 시험범위입니다.'";   // (O) 각각 다른 따옴표는 사용 가능
 ?>


(6) 연결 연산자

데이터와 데이터를 서로 연결하는 연결 연산자 .(dot)
연결 연산자를 사용하면 변수와 변수, 문자열과 문자열, 문자열과 변수를 연결가능

1. 변수와 변수 연결하기
<?php
  $str = "안녕";
  $str2 = "하세요.";

    echo $str.$str2;  // 결과 : 안녕하세요.
 ?>

2. 문자열과 문자열 연결하기
<?php
  echo "안녕"."하세요";  // 결과 : 안녕하세요.
 ?>

3. 변수와 문자열 연결하기
<?php
  $str = "안녕";
    echo $str."이라고 그가 말했다.";  // 결과 : 안녕이라고 그가 말했다.
 ?>


(7) 상수

상수란?
한번 값을 대입하면 값이 변경되지 않는 상수
변수는 변하는 수, 상수는 변하지 않는 수

상수 선언 방법
define(상수명, 상수값);

상수명 또한 변수명 짓기의 규칙을 지키지만, 상수 선언시에는 대문자를 사용하며 두 개의 단어로 사용할 경우 언더바를 사용
ex)
<?php
  //상수 FAVORITE_DOLL에 값 gelatoni를 대입
  define("FAVORITE_DOLL","gelatoni");
    echo "상수 FAVORITE_DOLL의 값은 ".FAVORITE_DOLL."<br>";

  //상수 FAVORITE_DOLL에 값 duffy를 대입
  define("FAVORITE_DOLL","duffy");
    echo "상수 FAVORITE_DOLL의 값은 ".FAVORITE_DOLL; //이미 위에서 상수 값이 gelatoni로 정해 졌기때문에 duffy로 바뀌지 않는다.
 ?>


(8) 연산자

연산자란?
수를 더하고 빼고, 곱하고, 나누고, 나머지를 구하는 기능

연산자를 사용하는 기호(+, -, *, /, %) //여기서 %는 나머지 값을 구할 때 사용


(9) 대입 연산자

대입 연사자에는 =외에도 다양한 종류가 있음

<?php
  // += 활용
  $num = 10;
  $num += 2;
  echo "[+=사용] 변수 num의 값은 ".$num."<br />";
  // 변수의 값에서 다른 값을 더한 값을 대입, 결과는 12

  // -= 활용
  $num = 10;
  $num -= 2;
  echo "[-=사용] 변수 num의 값은 ".$num."<br />";
  // 변수의 값에서 다른 값을 뺀 값을 대입, 결과는 8

  // *= 활용
  $num = 10;
  $num *= 2;
  echo "[*=사용] 변수 num의 값은 ".$num."<br />";
  // 변수의 값에서 다른 값을 곱한 값을 대입, 결과는 20

  // /= 활용
  $num = 10;
  $num /= 2;
  echo "[/=사용] 변수 num의 값은 ".$num."<br />";
  // 변수의 값에서 다른 값을 나눌 때 사용, 결과 5

  // %= 활용
  $num = 10;
  $num %= 3;
  echo "[%=사용] 변수 num의 값은".$num."<br />";
  // 변수의 값에서 다른 값을 나눠서 나온 나머지 값을 대입, 결과 1

  // .= 활용
  $city = '서울';
  $city .= '특별시';
  echo "[.=사용] 변수 city의 값은 ".$city;
  // 변수의 문자열에서 다른 문자열을 붙일 때 사, 결과 서울특별시

  // 대입 연산자
    ?>


(10) 증감 연산자

대입 연산자를 사용하지 않고도 값을 증가하거나 감소가 가능

<?php
  $num = 10;  // 변수명num을 변수값 10으로 선언
  $num++;     // 변수명num이 변경되기전 변수값 10을 반환
  $num;       // 변수명num이 현재 변수값의 10에서 증감 연산자로 인해 변수값이 11로 변경
  ++$num;     // 현재값 11에서 증감 연산자로 인해 바로 변경 후 결과값 12가 됨
 ?>


(11) 배열

배열을 사용하면 하나의 변수에 여러 개의 값을 대입 가능
배열 선언 - 변수명 = array();
<?php
  $space = array();   // 배열 선언
  $space[0] = 'earth';  // 인덱스(키) 0에 변수값 earth를 저장
 ?>


(12) 배열 인덱스를 문자로 적용

배열의 인덱스를 문자로도 지정이 가능
단, 따옴표로 감싸서 사용
<?php
  $earth = array();
  $earth['nation'] = 'korea';
 ?>
PHP에서는 인덱스를 키(key)라고도 부름


(13) 배열에 배열 적용

배열 안에 값 대신 배열을 지정 가능
<?php
  $earth = array();
  $earth['nation'] = array();   // 배열 안에 값 대신 배열 지정
  $earth['nation'][0] = 'korea';
  $earth['nation'][1] = 'america';
 ?>


(14) 배열에 값 추가하기

배열에 값을 추가하는 기능의 array_push() 함수를 사용
<?php
  $fruit = array();

  //array_push(변수명, 배열에 들어갈 값, 배열에 들어갈 값); / 인덱스(키는) 입력된 값 순서대로 0 부터 지정
  array_push($fruit, 'apple', 'banana', 'grape', 'coconet', 'tangerine');

  //배열을 이런식으로 직접 출력하기 보다 for반복문이나 foreach반복문을 사용하는편이 효율적
  echo $fruit[0].'<br>';
  echo $fruit[1].'<br>';
  echo $fruit[2].'<br>';
  echo $fruit[3].'<br>';
  echo $fruit[4];
  ?>


(15) 배열의 구조 보기

배열의 구조를 보여주는 함수 var_dump()로 구조와 값을 확인

var_dump()만으로 파악하기 어렵기 때문에 HTML의 pre태그와 함께 사용하는게 좋음
ex)
echo '<pre>';
  var_dump(배열 변수명);
echo '</pre>';

<?php
  $dr = array();                              //var_dump() 함수로 확인하기 위한 배열 생성
  $dr['continent'] = array();

  $dr['continent']['america'] = array();
  $dr['continent']['america'][0] = '애너하임';
  $dr['continent']['america'][1] = '올랜도';

  $dr['continent']['asia'] = array();
  $dr['continent']['asia'][0] = '우라야스';
  $dr['continent']['asia'][1] = '홍콩';
  $dr['continent']['asia'][2] = '상하이';

  $dr['continent']['europe'] = array();
  $dr['continent']['europe'][0] = '파리';     //var_dump() 함수로 확인하기 위한 배열 생성

  echo "<pre>";
  var_dump($dr);                              //var_dump() 함수 출력
  echo "</pre>";
 ?>


(16) 배열에 인덱스를 지정하지 않고 값 입력하기

배열에 값을 인덱스를 지정하지 않고 대입
[]대괄호를 사용하여 값을 순차적으로 입력
<?php
  $fruit = array();
  $fruit = ['banana', 'water melon', 'grape', 'apple', 'mango'];

  echo $fruit[0]; // banana
  echo "<br>";
  echo $fruit[2]; // grape
 ?>


(17) list() 함수를 이용한 배열의 값 출력하기

list()함수는 각 배열의 값을 변수에 대입시켜 출력
<?php
  $fruit = array();
  $fruit = ['grape', 'strawberry', 'apple'];

  list($first, $second, $third) = $fruit;
  echo $second;                           // 값은 strawberry
 ?>


(18) 특정 범위의 수를 배열로 만들기

특정 범위의 수를 직접 입력하지 않고 범위로 지정하여 배열로 만들려면 range()함수 사용
<?php
  $num = range(1, 10, 3); //range(시작하는 수, 끝나는 수, 간격)

  echo "<pre>";
  var_dump($num);         //변수의 구조와 값 확인
 ?>


(19) 배열의 값 개수 확인하기

배열의 값 개수를 확인할때에는 count()함수 사용

<?php
  $arr = range(1, 10, 3);
  echo "배열 arr의 값의 수는 : ".count($arr);
  ?>


(20) 데이터형
int 또는 integer / 숫자 - 정수
double / 숫자 - 소수
string / 문자열
boolean / 논리값(값 : true, false)
NULL / 없는값(값 : null)
array / 배열

<?php
  $num = 12;
  echo "\$num의 데이터형(값 {$num})은 ". gettype($num);                  //integer
  echo "<br>";

  $greeting = "안녕";
  echo "\$greeting의 데이터형(값 {$greeting})은 ". gettype($greeting);   //string
  echo "<br>";

  $numStr = "121212";
  echo "\$numStr의 데이터형(값 {$numStr})은 ". gettype($numStr);         //string
  echo "<br>";

  $fruit = array();
  echo "\$fruit의 데이터형은 ". gettype($fruit);                         //array
  echo "<br>";

  $nai = null;
  echo "\$nai의 데이터형(값 {$nai})은 ". gettype($nai);                  //NULL
  echo "<br>";

  $boolean = true;
  echo "\$boolean의 데이터형(값 {$boolean})은 ". gettype($boolean);      //boolean
  ?>


(21) 데이터형 변환

변수에 대입할 값 앞에 데이터형을 입력
<?php
  $str = "문자열";

    $str = array();

  echo "데이터형 변경 전의 데이터형 ".gettype($str)." 값은 {$str}"."<br>";

  $str = (int) $str;
  echo "데이터형 변경 후의 데이터형 ".gettype($str)." 값은 {$str}"."<br>";

  $str[0] = "123문자열";
  echo "데이터형 변경 전의 데이터형 ".gettype($str[0])." 값은 {$str[0]}"."<br>";

  $str[0] = (int) $str[0];
  echo "데이터형 변경 후의 데이터형 ".gettype($str[0])." 값은 {$str[0]}"."<br>";

  $str[1] = "문자열123";
  echo "데이터형 변경 전의 데이터형 ".gettype($str[1])." 값은 {$str[1]}"."<br>";

  $str[1] = (int) $str[1];
  echo "데이터형 변경 후의 데이터형 ".gettype($str[1])." 값은 {$str[1]}";
  // 숫자가 뒤에 위치하면 int 데이터형으로 변환해도 대입되는 값이 0
  ?>


(22) if 조건문
프로그래밍 하면서 가장 많이 쓰이는 문
어떠한 조건이 참인지 거짓인지를 판별하여 각각의 결과를 다르게 수행할때 사용

조건문 판별 기호
> : 크다
>= : 크거나 같다
< : 작다
<= : 작거나 같다
== : 같다
!= : 같지 않다(같지 않은 값이 나올때 참)
<?php
  $num1 = 4;
  $num2 = 4;

  // 두 값이 서로 일치하는지 판별
  if($num1 == $num2){
    echo "변수 num1 과 num2의 값은 같습니다.";
  }
 ?>

하나의 if문에 여러 개의 조건문을 사용 가능
여러 개의 조건문을 사용하기 위해선 AND 연산자와 OR 연산자를 사용

조건문 판별 기호
&&(AND) : 모든 조건이 참이어야 참
||(OR) : 조건 중 하나라도 참이면 참
<?php
  $gender = "boy";
  $likePlace = "disneyland";

  // 변수 gender의 값과 변수 likePlace의 값이 모두 참인지 확인
  if ($gender == "boy" && $likePlace == "disneyland"){
    echo "소년은 디즈니랜드를 좋아합니다.";
  }

  echo "<br>";

  $gender = "girl";
  $likePlace = "Universal Studios";

  // 변수 gender의 값과 변수 likePlace의 값이 모두 참인지 확인
  if ($gender == "girl" && $likePlace == "disneyland"){
    echo "소녀는 디즈니랜드를 좋아합니다.";
  }
 ?>


(23) if 조건문의 조건이 거짓이면 else문 사용
조건문의 조건의 참이 아닐 시에 작동하는 명령문 else
if조건문과 짝을 이뤄 사용함
<?php
  $num1 = 3;
  $num2 = 4;

  // 두 값이 서로 일치하는지 안하는지 판별
  if ($num1 == $num2){
    echo "변수 num1과 num2의 값은 같습니다.";
  } else {    //if의 조건이 거짓일때 작동
    echo "변수 num1과 num2의 값은 같지 않습니다.";
  }
  ?>

조건이 참이라는 것은 참 성향의 값을 의미
조건의 값이 꼭 true가 아니더라도 1 또는 '참'과 같은 값이 조건에 사용되면 그 조건문은 참으로 판별
거짓 성향의 값은 false와 null이 있음
<?php
  if(true){
    echo '참';   //true
  }
  if(1){
    echo '참';   //true
  }
  if('안녕'){
    echo '참';   //true
  }
  if(null){
    echo '참';   //false
  }
  if(false){
    echo '참';   //false
  }
 ?>


(24) else문에 if문 사용하기
else문에 다른 명령문을 사용할 수 있음
if문의 조건문이 거짓일 때 else문에 if문을 사용해 다른 조건을 제시할 경우에 사용
<?php
  if(조건문){
    //조건이 참일 때 작동, 거짓일 경우 밑의 else if로 넘어감
  } else if {
    //조건이 참일 때 작동, 거짓일 경우 중단
  }
 ?>

 <?php
   $gender = 'girl';
   $likePlace = 'Universal Studios';

   if($gender == 'girl' && $likePlace == 'disney land'){
     echo "소녀는 디즈니랜드에 가는 것을 좋아합니다.";
   } else if ($gender == 'girl' && $likePlace == 'Universal Studios'){
     echo "소녀는 유니버셜 스튜디오에 가는 것을 좋아합니다.";
   }else{
     echo "소녀는 무엇도 좋아하지 않습니다.";
   }
  ?>


(25) switch 조건문
switch 조건문은 여러개의 조건을 확일할 때 사용
한 번에 여러개의 조건문을 사용하고 조건에 따라 명령문이 달라야 하는 경우에도 사용
<?php
  switch(일치해야 할 대상) {
    case 일치하는지를 비교할 값 또는 조건:
      //실행할 명령문
      break;

    //case문에 일치하는 대상이 없을 때 실행하는 명령문 default
    default:
    //case문에 일치하는 대상이 없을 때 사용
    break;
  }
 ?>

 <?php
   $likeCharacter = 'mickey';

   switch($likeCharacter) {
     case 'mickey':
       echo '미키';   //조건이 일치하기때문에 참, 출력
     break;           //조건이 참이기 때문에 빠져나감, break 문이 없다면 다음 조건문 실행

     case 'minnie':
       echo '미니';
     break;

     case 'stellalou':
       echo '스텔라루';
     break;

     case 'duffy':
       echo '더피';
     break;

     default :
       echo '무엇도 좋아하지 않습니다.';
     break;
   }
  ?>


(26) else문에 switch문 사용하기
else문 다음에 if문을 사용했듯이 switch문도 사용 가능
<?php
  if(조건){
    명령문
  } else switch(변수) {
    명령문
  }
 ?>

 <?php
   $gender = 'woman';
   $likePlace = "Universal Studios";

   if($gender == 'man'){    //if조건문의 조건이 거짓이므로 else문의 switch가 실행
       echo "only woman.";
     } else switch ($likePlace){

       case 'disneyland':   //조건문의 조건이 거짓이므로 밑으로 진행
         echo "디즈니랜드를 좋아합니다.";
         break;

       case 'disneysea':    //조건문의 조건이 거짓이므로 밑으로 진행
         echo "디즈니씨를 좋아합니다.";
         break;

       case 'Universal Studios':    //조건문의 조건이 참이므로 변수 $likePlace의 값을 실행하고 빠져나옴
         echo "유니버셜 스튜디오를 좋아합니다.";
         break;

       default :            //이미 빠져나왔기 때문에 실행시키지 않음
         echo "무엇도 좋아하지 않습니다.";
     }
  ?>


(27) switch문의 case문에 조건 사용하기
casse문에 조건을 부여하여 참인 경우 원하는 명령 실행 가능
여러 가지 조건을 사용하는 목적으로 switch 조건문이 있기 때문에 else if문을 여러 개 사용하는 것 보다 좋음
<?php
  switch(변수){
    case(조건):
    //명령문
    break;
  }
 ?>

 <?php
   $age = 24;

   switch ($age){
     case ($age >= 10 && $age <= 19):
     echo "10대입니다.";
     break;

   case ($age >= 20 && $age <= 29):
     echo "20대입니다.";
     break;

   case ($age >= 30 && $age <= 30):
     echo "30대입니다.";
     break;
   }
  ?>


(28) for 반복문
같은 일을 반복적으로 구현할 때는 반복문을 사용(php는 자동화를 시켜야 공장처럼 돌아가기때문에 반복문이 중요)
for()문은 초기값, 조건식, 증감식으로 구성

for문 사용 방법
<?php
  for(초기값; 조건식; 증감식){
    실행할 코드
  }
 ?>

ex)
<?php
for($i = 0;/*초기값*/ $i < 4;/*조건식*/ $i++/*증감식*/){
  echo "{$i}번째 실행";//실행할 코드
}
 ?>
초기값 : 변수를 선언한 후 값을 대입 $i = 0;
조건식 : 초기값에서 선언한 변수가 조건에 참일 경우 for문 작동 / ex) $i <= 10; - i가 10보다 작거나 같으면 for문 작동
증감식 : i를 증가시켜 조건식을 모두 만족한 후 for문을 빠져나오게 함 / ex) i++(++는 값에 1을 더한다는 의미), i--(--는 값에 1을 뺀다는 의미)
실행할 코드 : 조건이 참인 동안 실행할 코드

<?php
  for ($i = 1; $i <=10; $i++){    // 변수 i의 값이 10보다 작거나 같으면 실행하되 변수 i를 1씩 증가시켜 조건식을 모두 만족시킨후 빠져나옴
    echo $i.', ';
  }
 ?>


(29) for 반복문 안 if 조건문 사용하기
for 반복문 안에서 여러 가지 명령문을 사용 가능
for문 조건의 결과가 참인 동안 명령을 반복해서 실행
<?php
  for(초기값; 조건문; 증감식){
    if(조건문){
    }
  }
  ?>

1부터 50까지의 수에서 짝수, 홀수의 합을 구하는 예제
<?php
  $sum = 0;
  $maxValue = 50;
  for ($i = 1; $i <= $maxValue; $i++){
    if($i % 2 == 0){
      $sum += $i;
    }
  }

  echo "1부터 {$maxValue}까지의 짝수 누적합 : {$sum}";

  echo "<br>";

  $sum = 0;
  $maxValue = 50;
  for ($i = 1; $i <= $maxValue; $i++){
    if($i % 2 == 1){
      $sum += $i;
    }
  }

  echo "1부터 {$maxValue}까지의 홀수 누적합 : {$sum}";
 ?>


(30) 반복문에서 빠져나오기 break
반복문 실행 도중 break문을 만나면 반복문 실행을 중단
<?php
  for ($i = 0; $i < 10; $i++){
    if($i == 5){                // 변수 i의 값이 5이면 밑의 break문이 작동하여 for문이 중단
      break;
    }
    echo $i.',';
  }
 ?>


(31) 반복문에서 스킵하기 continue
반복문 작동 중 continue문을 만나면 continue문 아래에 있는 명령문을 실행하지 않고 바로 다음 반복문을 진행
<?php
  for ($i = 0; $i < 10; $i++){
    if ($i == 5){
      continue;   // 변수 i의 값이 5일 때 스킵
    }
    echo $i.',';
  }
 ?>


(32) for 반복문 속 for 반복문
for문 안에서 for문을 작동시키면 복잡한 연산을 간단히 처리 가능
<?php
  for($i = 0; $i < 3; $++){
    echo "바깥쪽 for문 횟수 : {$i}";

    for($n = 0; $n < 3; $n++){
      echo "안쪽 for문 횟수 : {$n}";
    }
  }
 ?>


(33) foreach() 반복문 사용하기
배열을 처리하기 편리한 반복문
반복문에 초기값, 조건, 증감식을 사용하지 않아도 됨
<?php
  foreach(배열 변수 as 배열의 값을 대입할 변수){
    배열의 값을 대입할 변수 사용
  }
 ?>

for문을 사용했을때
<?php
  $memberList = ['김미우','김유나','김민후','김해윤'];

    $memberListCount = count($memberList);
    for($i = 0; $i < $memberListCount; $i++){
      echo $memberList[$i]."<br>";
    }
 ?>

foreach문을 사용했을때
<?php
  $memberList = ['미우','유나','민후','해윤'];

    foreach($memberList as $ml){
      echo $ml;
      echo '<br>';
    }
 ?>

 배열의 인덱스가 숫자가 아닌 문자로 된 배열을 처리할때
 <?php
   $memberList[0] = ['name'=>'미우','id'=>'miu'];
   $memberList[1] = ['name'=>'유나','id'=>'yuna'];
   $memberList[2] = ['name'=>'민후','id'=>'minhoo'];
   $memberList[3] = ['name'=>'해윤','id' =>'haeyun'];

   foreach($memberList as $ml){
     echo "이름 : ".$ml['name'];
     echo '<br>';
     echo "아이디 : ".$ml['id'];
     echo '<br><br>';
   }
  ?>

foreach문에서 배열의 인덱스를 가져오는 방법
<?php
  $memberList = ['name' => '미우','id' => 'miu'];

  foreach($memberList as $index => $value){
    echo "인덱스 {$index}의 값 : {$value}";
    echo '<br>';
  }
 ?>
 <?php
   $memberList[0] = ['name'=>'미우','id'=>'miu'];
   $memberList[1] = ['name'=>'유나','id'=>'yuna'];
   $memberList[2] = ['name'=>'민후','id'=>'minhoo'];
   $memberList[3] = ['name'=>'해윤','id'=>'haeyun'];

   foreach($memberList as $index => $value){
     foreach($value as $index2 => $value2){
       if($index2 == 'name'){
         echo "{$value2}님의 아이디는 : ";
       }
       if($index2 == 'id'){
         echo "{$value2} 입니다.";
       }
     }
     echo '<br><br>';
   }
  ?>


(34) while 반복문
while()문의 괄호 안에는 조건이 들어감
for반복문에 비해 조금 더 심플
<?php
  $i = 0;         //변수
  while($i < 10){ //조건식
    실행문
    $i++;   //증감식
  }
 ?>
주의할 부분은 증감식을 설정하지 않으면 변수의 변화가 없게 되므로 조건식은 항상 참이 되어야 함
while문의 조건식이 참이면 실행문이 실행되고, 거짓이면 while문에서 빠져나옴
<?php
  //합산값을 저장할 변수 선언
  $sum = 0;

  //누적합을 시작할 값 선언
  $num = 1;

  while($num <= 10){

    //$num값을 $sum에 더하여 누적시킴
    $sum += $num;

    $num++;
  }

  //while문이 종료된 후 sum에 대입된 누적합계 출력
  echo "1부터 10까지의 누적합은 {$sum}입니다."
 ?>


(35) do-while 반복문
do-while문은 조건식이 참이든 거짓이든 우선 한 번은 실행이되고 그 이후 조건식이 참이면 실행하는 구조
do문에 실행문을 작성, while문에는 조건식을 작성
<?php
  do {
    명령문
  }
  while(조건식);
 ?>

while문의 조건이 거짓이여도 do문의 명령문이 실행되는지 확인해보려면?
<?php
  do {
    echo "이 문구는 한 번만 출력되어야 정상";
  }
  while(false);
 ?>

안녕하세요 5회 출력
<?php
  $i = 0
  do {
    echo "안녕하세요.<br>";
    $i++;   //증감식
  }
  while($i < 5);
 ?>


(36) 문자열의 시작과 끝에 있는 공백 없애기
문자열의 시작과 끝에 있는 공백을 없애는 함수인 trim()
ltrim('문자열'); : 문자열 앞의 공백을 없앰
trim('문자열'); : 문자열 앞 뒤의 공백을 없앰
rtrim('문자열'); : 문자열 뒤의 공백을 없앰
<?php

  $str = " 양쪽 모두 공백 없앰 ";
  echo '|'.trim($str).'|';  //|는 공백 확인을 위해 사용
  echo "<br>";

  $str = " 앞만 공백 없앰 ";
  echo '|'.ltrim($str).'|'; //|는 공백 확인을 위해 사용
  echo "<br>";

  $str = " 뒤만 공백 없앰 ";
  echo '|'.rtrim($str).'|'; //|는 공백 확인을 위해 사용
 ?>


(37) 문자열을 대문자로 출력하기
문자열을 모두 대문자로 변경하는 함수인 strtoupper()
string to upper
strtoupper('문자열');
<?php
  $str = "everdevel";
  echo strtoupper($str);
 ?>


(38) 문자열을 소문자로 출력하기
문자열을 모두 소문자로 변경하는 함수인 strtolower()
string to lower
strtolower('문자열');
<?php
  $str = "EVERDEVEL";
  echo strtolower($str);
 ?>


(39) 문자열의 수 세기
문자열의 수는 세는 함수인 strlen()
string length
strlen('문자열');
<?php
  $str = "beanscent";
  echo "문자열 수 : ".strlen($str);

  echo "<br>";

  $str = " b e a n s c e n t "

  echo "문자열 수 : ".strlen($str);
 ?>


(40) 문자열의 특정 문자를 치환하기
문자열에서 특정 문자를 다른 문자로 치환하는 함수인 str_replace()
str_replace('치환할 문자', '대체할 문제', '대상 문자열');
<?php
  $str = "welcome to everdevel";

  //변수 str에 있는 everdevel을 beanscent로 치환
  $changeWord = str_replace('everdevel','beanscent', $str);
  echo $changeWord;
 ?>


(41) 문자열을 자릿수로 자르기
substr()을 사용하면 문자열에서 자릿수를 지정하여 특정 자릿수의 문자열을 잘라낼 수 있음
substr("대상 문자열", 자르기 시작할 위치, 자를 문자열 수);

자르기 시작할 위치
왼쪽부터 오른쪽 : 0
오른쪽부터 왼쪽 : -1
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


(42) 첫 글자를 대문자로 변경하기
문자열의 첫 글자가 영문이면 첫글자만 대문자로 변경하는 함수 ucfirst();
<?php
  $str = 'everdevel';

  echo '첫 글자가 영문인 경우 : '.ucfirst($str);
  ?>


(43) 영문의 첫 글자를 대문자로 변경하기
문자열에 있는 모든 영문의 첫 글자를 대문자로 변경하는 함수 ucwords();
<?php
  $str = "everdevel, tomodevel, startwebcoding";
  echo ucwords($str);

  echo '<br>';

  $str = 'one sugar dream';
  $str = ucwords($str);
  echo $str;
 ?>


(44) 문자열 속에서 특정 문자의 위치 찾기
문자열 속에서 특정 문자의 위치가 몇 번째에 위치하는지 찾아주는 함수 strpos();
strpos('전체 문자열', '찾을 문자');
<?php
  $str = "web development";
  $findStr = 'd';
  $pos = strpos($str,$findStr);
  echo "문자열 {$findStr}의 위치는 : ".$pos;  //문자열 d의 위치는 : 4
 ?>


(45) 변수의 존재 확인하기
어떠한 변수가 선언되었는지의 유무를 확인하는 함수 isset();
isset(변수);
변수가 선언되었다면 boolean 데이터형인 true을 그렇지 않다면 false를 반환
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


(46) 변수에 데이터형 적용하기
변수에 데이터형을 지정하는 함수 settype();
settype(변수명, 변경할 데이터형);
변수의 데이터형이 boolean이면 echo문을 사용해 결과를 확인할 경우 true이면 1,
false이면 값을 표시하지 않으므로 var_dump()함수를 사용하여 확인
<?php
  $val = "true";
  echo "변수 val의 데이터형 ".gettype($val);

  echo "<br>";
  settype($val, 'bool');
  echo "변수 val의 데이터형 ".gettype($val);
  echo "<br>";
  var_dump($val);
 ?>


(47) 변수의 값이 빈 값인지 확인하기
변수의 값이 빈 값인지 확인하는 함수 empty()
값이 비어 있다면 true를 반환, 그렇지 않다면 false를 반환
<?php
  $var = '';
  echo '값이 빈 문자열일 경우';
  var_dump(empty($var));
  echo '<br>';

  $var = NULL;  // 소문자로 작성해도 무관
  echo '값이 NULL인 경우';
  var_dump(empty($var));

  echo '<br>';

  $var = array(); // array()대신 []를 작성해도 무관
  echo '값이 빈 배열인 경우';
  var_dump(empty($var));
  echo '<br>';

  $var = 0;
  echo '값이 정수 0인 경우';
  var_dump(empty($var));
  echo '<br>';

  $var = '0';
  echo '값이 문자열 0일 경우';
  var_dump(empty($var));
  echo '<br>';

  $var = 'string';
  echo '값이 문자열 string인 경우';
  var_dump(empty($var));
 ?>


(48) PHP 설정보기
<?php
  phpinfo();
  ?>


(49) 타임스탬프 시간 확인하기
타임스탬프 시간을 나타내는 함수 time();
1970년 1월 1일 0시 0분 0초부터 세기 시작한 시간 (초 단위)
<?php
  echo time();
  ?>


(50) 원하는 형식으로 시간 표시하기
타임스탬프의 값을 몇면 몇월 며칠 형태로 바꾸는 함수 date();
date(시간 포맷, 타임스탬프값);

시간 포맷 값
Y : 연도를 4자리로 표시 (2017)  / y : 연도를 2자리로 표시 (17)
m : 0이 붙어 월을 표시 (04) / n : 0 없이 월을 표시 (4)
d : 0이 붙어 일을 표시 (01) / j : 0 없이 일을 표시 (1)
H : 0이 붙어 시를 표시, 24시 표현 (08)  / G : 0 없이 시를 표시, 24시 표현(8)
i : 0이 붙어 분을 표시 (09)
s : 0이 붙어 초를 표시 (09)
A : 오전, 오후를 대문자료 표시 (AM) / a : 오전, 오후를 소문자로 표시 (am)
D : 요일을 세 글자로 표시 (Sun) / l : 요일을 전체 글자로 표시 (Sunday)
w : 요일을 숫자로 표시 0 ~ 6, 일요일은 0 부터, 토요일은 6 까지 (0)
M : 월을 세 글자로 표시 (Jan) / F : 월을 전체 글자로 표시 (January)
z : 올해의 며칠 째인지 표시 (324)

현재 시간의 년도 월 일을 yyyy-mm-dd 형식으로 구하려면,
date('Y-m-d', 타임스탬프값);
<?php
  echo "현재 시간은 ".date("Y년 m월 d일 H시 i분 s초", time()); 
 ?>


(51) 특정 시간을 타임스탬프 시간으로 표시하기
특정 시간을 타임스탬프로 만드는 함수 mktime()
mktime(시, 분, 초, 월, 일, 년);
<?php
  echo "2021년 09월 13일 15시 18분 9초의 타임스탬프는? <br>";
  $timeStamp = mktime(15, 18, 9, 9, 13, 2021);
  echo $timeStamp;
 ?>


(52) 특정 시간에만 특정 명령어 작동하기
if문과 mktime() 함수, time() 함수를 사용하여 특정 시간에만 특정 기능이 동작하게 가능
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


(53) 특정 날짜가 있는 주의 월요일 날짜 구하기
<?php
  $year = 2021;
  $month = 10;
  $day = 25;

  //특정 날짜의 타임스탬프값 구하기
  $targetDateTimeStamp = mktime(0, 0, 0, $month, $day, $year);

  //요일 찾기
  $dayOfWeek = date('w', $targetDateTimeStamp);

  //하루의 초(second)
  $secondOfOneDay = 60 * 60 * 24;

  switch($dayOfWeek){
    case 1 : //월요일
      $monday = $targetDateTimeStamp;
      $friday = $targetDateTimeStamp + ($secondOfOneDay * 4);
      break;
    case 2 : //화요일
      $monday = $targetDateTimeStamp - ($secondOfOneDay * 1);
      $friday = $targetDateTimeStamp + ($secondOfOneDay * 3);
      break;
    case 3 :  //수요일
      $monday = $targetDateTimeStamp - ($secondOfOneDay * 2);
      $friday = $targetDateTimeStamp + ($secondOfOneDay * 2);
      break;
    case 4 :  //목요일
      $monday = $targetDateTimeStamp - ($secondOfOneDay * 3);
      $friday = $targetDateTimeStamp + ($secondOfOneDay * 1);
      break;
    case 5 : //금요일
      $monday = $targetDateTimeStamp - ($secondOfOneDay * 4);
      $friday = $targetDateTimeStamp;
      break;
  }

  if(isset($monday) && isset($friday)){
    echo "{$year}년 {$month}월 {$day}일이 있는 주의 월요일과 금요일의 날짜";
    echo "<br>";
    echo "월요일 : ".date('Y-m-d', $monday);
    echo "<br>";
    echo "금요일 : ".date('Y-m-d', $friday);
  }else{
    echo "월요일 부터 금요일의 날짜를 입력하세요.";
  }
 ?>


(54) 현재 시간 정보를 배열로 보기
현재 시간의 정보를 배열로 받는 함수 gettype()
<?php
  $nowTime = getdate();
  echo "현재 년도 : ".$nowTime['year']."<br>";
  echo "현재 월 : ".$nowTime['mon']."<br>";
  echo "현재 일 : ".$nowTime['mday']."<br>";
  echo "현재 시 : ".$nowTime['hours']."<br>";
  echo "현재 분 : ".$nowTime['minutes']."<br>";
  echo "현재 초 : ".$nowTime['seconds']."<br>";
  echo "현재 요일 숫자 : ".$nowTime['wday']."<br>";
  echo "현재 요일 문자 : ".$nowTime['weekday']."<br>";
  echo "현재 월 문자 : ".$nowTime['month']."<br>";
  echo "현재 시간 타임스탬프 : ".$nowTime[0]."<br>";
  echo "올해의 일차 : ".$nowTime['yday'];
 ?>


(55) 날짜값이 유효한지 확인하기
날짜가 유효한 값이 맞는지 확인하는 함수 checkdate()
유효한 날짜 값이면 true, 아니면 false를 반환
checkdate(월, 일, 년);
<?php
  $isDateCheck = checkdate(9, 31, 2021);

  if($isDateCheck){
    echo "유효한 날짜입니다.";
  } else {
    echo "유효하지 않은 날짜입니다.";
  }
 ?>


(56) 1초 이하의 시간 확인하기
현재 시간을 마이크로초까지 계산하는 함수 microtime()

소수 표현과 정수 표현을 따로 표시
microtime();

소수 표현과 정수 표현을 함께 표시
microtime(true);

<?php
  //마이크로초를 따로 표시
  echo microtime();
  echo "<br>";
  //마이크로초를 함께 표시
  echo microtime(true);
 ?>


(57) 가장 큰 값 구하기
배열에서 가장 큰 수를 찾는 함수 max();
<?php
  $arr = range(1, 1000);
  echo "가장 큰 수 : ".max($arr);
 ?>


(58) 가장 낮은 값 구하기
배열에서 가장 작은 수를 찾는 함수 min();
<?php
  $arr = [5, 3, 100, 749, 9383];
  echo "가장 작은 수 : ".min($arr);
 ?>


(59) 실수 반올림하기
실수를 반올림하는 함수 round()
round(반올림할 수, 표시할 실수의 위치)

표시할 실수의 위치
1일때 : 0.1 소숫점 첫번째 자리까지 표시
2일때 : 0.01 소숫점 두번째 자리까지 표시
0일때 : 1 정수 첫번째 자리까지 표시
-1일때 : 10 정수 두번째 자리까지 표시
<?php
  $num = 16.78;
  $round = round($num, 1);
  echo $round;
 ?>


(60) 실수 내림하기
실수를 내림하는 함수 floor()
<?php
    $num = 12.68;
    $floor = floor($num);
    echo $floor;
    ?>


(61) 실수 올림하기
실수를 올림하는 함수 ceil()
<?php
    $num = 12.68;
    $ceil = ceil($num);
    echo $ceil;
    ?>

    
(62) 숫자를 3자리씩 구분하여 "," 표시하기
숫자를 구분하기 편하게 3자리마다 ","를 표시하는 함수 number_format()
number_format(표시할 수);
<?php
    $num = 123456789;
    echo number_format($num);
    ?>
number_format(표시할 수, 소수점 자릿수);
<?php
    $num = 123456789.794;
    echo number_format($num,2);
    ?>
number_format(표시할 수, 소숫점 자리수, 소수점 표시 문자, 콤마 표시 문자);
<?php
    $num = 123456789.794;
    echo number_format($num, 2, '-', ':');
    ?>


(63) 랜덤값 구하기
랜덤으로 수를 반환하는 함수 rand()
특정한 범위의 값을 적용하면 그 사이의 값을 반환
rand(시작할 값, 끝날 값);
<?php
    $randNum = rand(1, 3);
    $kawibawibo = '';

    switch($randNum){
        case 1 :
            $kawibawibo = '가위';
            break;
            
        case 2 :
            $kawibawibo = '바위';
            break;

        case 3 :
            $kawibawibo = '보';
            break;

        default :
            $kawibawibo = '';
            break;
    }

    echo "컴퓨터의 선택은 : {$kawibawibo}";
    ?>


(64) 함수 만들기
지금 까지 여러 함수의 사용 방법에 알아보았는데
이렇게 이미 존재하는 함수들은 내장함수 라고 부름
프로그래밍을 하다 보면 함수를 만들어야 하는 일이 많이 발생
ex) 어떠한 기능을 만들었는데 이 기능이 다른 곳에서도 쓰인다면
매번 같은 소스를 작성할 필요 없이 한 번 함수로 만들어서
필요 할 때 마다 호출하여 사용
function 함수명(){명령문 작성}
<?php
    //outputHello 함수 생성
    function outputHello(){
        echo "hello world";
    }
    ?>


(65) 함수 호출하기
함수를 호출 -> 함수명();
<?php
    //outputHello 함수 생성
    function outputHello(){
        echo "hello world";
    }

    //outputHello 함수 호출
    outputHello();
    ?>


(66) 파라미터(parameter)와 아규먼트(argument)
아규먼트(argument) : 함수를 호출할 때 함수에 전달하는 값
파라미터(parameter) : 함수의 값을 전달받는 부분
<?php

    //함수 생성
    function sum($num1, $num2){   //$num1, $num2 파라미터
        $sum = $num1 + $num2;
        echo $sum;
    }

    //아규먼트 5와 10을 전달
    sum(5, 10);
    ?>


(67) 함수에서 값 반환하기
함수를 호출한 곳으로 값을 전달할 때는 return문 사용
return 전달할 값;
<?php

    //함수 생성
    function sum($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;

        //아래의 코드는 작동하지 않음
        echo '함수';
    }
        //아규먼트 5와 10을 전달
        echo sum(5,10);

        $plus = sum(5, 10);
        echo '<br>';
        echo $plus + 20;
    ?>


(68) 파라미터(parameter)의 기본값 설정하기
function 함수명(파라미터 = 기본값){}

function sum($param1, $param2){     //$param1 : 기본값 1, $param2 : 기본값 2
}
sum($num1);     //아규먼트(argument)

<?php
    function sum($param1 = 50, $param2 = 100){
        $sum = $param1 + $param2;
        return $sum;
    }
        //아규먼트를 모두 적어서 호출
        echo "sum(5, 10) = ".sum(5, 10);
        echo '<br>';
        
        //아규먼트를 하나만 적어서 호출
        echo "sum(5) = ".sum(5);
        echo '<br>';

        //아규먼트를 적지 않고 호출
        echo "sum() = ".sum();
        ?>


(69) $_SERVER 변수
$_SERVER은 슈퍼 글로벌 변수 중 하나
PHP자체적으로 내장된 변수이며 데이터형은 배열(array)

$_SERVER 변수로 얻을 수 있는 정보

PHP_SELF : 현재 실행 중인 파일의 경로와 파일명 표시
argv : 페이지에 전달된 데이터 표시
argc : 페이지에 전달된 데이터의 라인별 수
GATEWAY_INTERFACE : 서버가 사용 중인 CGI의 버전
SERVER_ADDR : 현재 사용 중인 서버의 IP주소
SERVER_NAME : 현재 사용 중인 서버의 호스트명
SERVER_SOFTWARE : 리스폰스헤더에 쓰여있는 서버의 소프트웨어 환경
SERVER_PROTOCOL : 페이지가 리퀘스트될 때의 프로토콜명과 버전
REQUEST_METHOD : 페이지에 엑세스할 때 사용된 리퀘스트의 메소드명
REQUEST_TIME : 리퀘스트가 개시된 때의 타임스탬프
REQUEST_TIME_FLOAT : 리퀘스트가 개시된 때의 타임스탬프(마이크로 초 표시)
QUERY_STRING : 검색인수 표시
DOCUMENT_ROOT : 현재 실행 파일의 경로를 현재 사용 중인 시스템의 최상위 경로부터 표시
HTTP_CONNECTION : 현재 리퀘스트의 CONNECTION 헤더 내용
HTTP_HOST : 현재 리퀘스트의 HOST 헤더 내용
HTTP_REFERER : 현재 페이지 이전의 페이지 주소
HTTP_USER_AGENT : 페이지에 접속 중인 유저 에이전트의 표시 문자열
HTTPS : HTTPS 프로토콜을 이용해 실행되는 경우의 정보를 표시
REMOTE_ADDR : 현재 페이지를 보고 있는 유저의 아이피 주소
REMOTE_HOST : 현재 페이지를 액세스하고 있는 호스트명
REMOTE_POST : 사용자의 기기에서 웹서버로 통신하는 포트
REMOTE_USER : 인증된 사용자 여부
SCRIPT_FILENAME : 현재 실행 중인 스크립트의 절대주소
SERVER_ADMIN : 웹서버 설정 파일의 SERVER_ADMIN에 설정된 값
SERVER_PORT : 웹서버의 통신포트(보통 : 80)
<?php
    echo 'DOCUMENT_ROOT is '.$_SERVER['DOCUMENT_ROOT'].'<br>';
    echo 'HTTP_ACCEPT_LANGUAGE is '.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>';
    echo 'HTTP_HOST is '.$_SERVER['HTTP_HOST'].'<br>';
    echo 'HTTP_USER_AGENT is '.$_SERVER['HTTP_USER_AGENT'].'<br>';
    echo 'SERVER_PORT is '.$_SERVER['SERVER_PORT'].'<br>';
    echo 'SCRIPT_NAME is '.$_SERVER['SCRIPT_NAME'].'<br>';
    echo 'REQUEST_URI is '.$_SERVER['REQUEST_URI'].'<br>';
    echo 'PHP_SELF is '.$_SERVER['PHP_SELF'].'<br>';
    echo 'QUERY_STRING is '.$_SERVER['QUERY_STRING'].'<br>';
    ?>


(70) 하나의 파일을 여러 곳에서 사용하기 include
파일 불러오기(load)와 같음
include "파일 경로와 파일명";
<?php
    include "./70-1-include.php";       //include "파일 경로와 파일명";
    ?>


(71) 하나의 파일을 여러 곳에서 사용하기 require
사용 방법은 include와 동일
require "파일 경로와 파일명";
<?php
    require "./70-1-include.php";
    ?>


include와 require는 같은 기능을 갖고 있으나
include는 불러오는 파일의 경로나 파일명에 문제가 있더라도 오류를 발생시키지 않는 반면,
require는 오류를 발생시킨다는 차이점이 있음

예시로 없는 파일을 불러올때
<?php
    include "noneFile.php";
    // 윈도우에서는 경고문이 뜨지만 에코문은 작동
    echo "페이지에 오류가 없습니다.";
    ?>

<?php
    require "noneFile.php";
    // 결과 페이지 오류
    echo "페이지에 오류가 없습니다.";
    ?>


(72) include와 require를 한 번만 호출하기
