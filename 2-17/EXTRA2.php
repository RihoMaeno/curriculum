<?php
$time=time();
$number=intval(date("H",$time));
printf("今%d時台です",$number);
echo"<br>";
if($number<11 && $number>4){
    echo "おはようございます";
}elseif($number>=11 && $number<18){
    echo "こんにちは";
}else{
    echo "こんばんは";
}
?>