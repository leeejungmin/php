<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">

  </head>
  <body>
<?php
ini_set("display_errors","1");
$uploaddir = 'L:\WAMP\apache2\htdocs\php\\' ;
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
  echo "ㅍㅏ일이 유효하고, 성공적으로 업로드 되었다.\n";

}else{
  print "파일 업로드의 공격 가능성이 있다.\n";
}
echo '자세한 디버깅 정보이다.';
print_r($_FILES);
print"</pre>";
?>
<img src= "file/<?=$_FILES[userfile][name]?>" />
  </body>
</html>
