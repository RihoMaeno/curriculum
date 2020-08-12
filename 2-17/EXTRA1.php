<?php
$x=0;
for($number=1;$number<=40;$number++){
    printf("%d回目＝%d",$number, $y=rand(1,6));
    echo "<br>";
    $x+=$y;
    if($x>=40){break;}
}
printf("合計%d回でゴールしました",$number);
?>