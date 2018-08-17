<html>
<body>


<?php
namespace array\shift;
#호출할땐 require_once 'array\shift\welcome();
#같은 함수이름을 호출할때 쓰인다
$li = ['a','b','c'];
array_unshift($li,'z');#앞에 추 그외 push, shift가 있다.
array_pop($li);#끝에 것을 제거
rsort($li);
var_dump($li);


function welcome(){
  $grades = [];
  $grades['lee'] = 1;
  $grades['jung'] = 2;
  $grades['min'] = 3;
  foreach($grades as $key => $value){
    echo "key: {$key} value:{$value}<br />";
  }
  }
?>
</body>
</html>
