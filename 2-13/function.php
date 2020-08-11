<?php
$x = 3.4;
echo ceil($x)."<br>";
echo floor($x)."<br>";
echo round($x)."<br>";
echo pi();
function circleArea($r) {
    $circleArea = $r*$r*pi();
    echo $circleArea; 
}
echo "<br>";
circleArea(3)."<br>";

echo mt_rand(1, 100)."<br>";

$str = "Hello";
echo strlen($str)."<br>";
echo strpos($str, "l")."<br>";
echo substr($str, -2, 2)."<br>";
echo str_replace("ello", "ELLO", $str)."<br>";

$str2 = "Hello !";
echo str_replace(" ", "", $str2)."<br>";

$str3 = "あかさたな";
echo mb_strlen($str3)."<br>";

$name = "田中さん";
$limit_hour = 24;
$limit_minute = 12;
printf("%sは残り%02d時間%02d分", $name, $limit_hour, $limit_minute);
?>
