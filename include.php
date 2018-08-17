<html>
<body>
  <?php
  // include 'arrayshift.php';
  // echo welcome();

  namespace array\shift;
  #호출할땐 require_once 'array\shift\welcome();
  #같은 함수이름을 호출할때 쓰인다
  require_once 'arrayshift.php';
  echo welcome();
  ?>
</body>
</html>

<!--
$filename ='readme.txt';
if(is_readable($filename)){
  echo 'the file is readable'
}else{
  echo 'the file is not'

  읽을 수 있는지 확인
} -->
