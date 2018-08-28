<html>
<body>
  <?php
  function numbering(){  for($i =0; $i <10; $i++){
    echo "everybody{$i}<br />";}
  }

  function get_argument($lee=100){
    return $lee;

  }
  function get_number(){
    return["lee","jung","min"];
    }
$members = get_number();
for($i=0;$i < count($members); $i++){
  echo print_r($members[$i].'<br />');
}
echo get_number()[2];
echo "<br />";
numbering();
echo "<br />";
echo "<li><a href=\"?id={$member['1']}\">".htmlspecialchars($member['1'])."</a></li>";                     
// \"?id={$members['0']}\";
     ?>
    #continue를 생각해볼것

  </body>
</html>
