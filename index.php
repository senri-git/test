<?php
//＜実習2＞PHPによる四則演算
// 足し算
$a = 1 + 2;

// 引き算
$b = $a - 1;
// 掛け算
$c = $a * $b;
// 割り算
$d = $c / $a;
// 出力
echo "$a";
echo "$b";
echo "$c";
echo "$d";

// ＜実習4＞PHPによる繰り返し処理
for($i = 0;$i < 10;$i++){
  echo "$i\n";
}

// ＜実習6＞PHPによる条件分岐
$i  = 4;
if($i > 5){
    echo "iは5より大きい数字";
}
else{
    echo "iは5より小さい数字";
}

?>

<!-- 
<script>
 //＜実習3＞JavaScriptによる四則演算
  var a,b,c,d;
  a = 1 + 2;
  b = a - 1;
  c = a * b;
  d = c / a;
  alert(a);
  alert(b);
  alert(c);
  alert(d);
</script> -->
<!-- 
<script>// ＜実習5＞JavaScriptによる繰り返し処理
for(var i = 0;i < 10;i++){
    alert(i);
}
</script> -->


<script>// ＜実習7＞JavaScriptによる条件分岐
var i = 4;
if(i > 5){
    alert('iは5より大きい数字');
}
else{
    alert('iは5より小さい数字');
}
</script>




