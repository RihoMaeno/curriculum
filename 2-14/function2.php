<?php
$number = ["15", "12", "14", "13", "11"];
echo count($number)."<br>";

sort($number);
var_dump($number);
echo "<br>";

if (in_array("12", $number)) {
    echo "12はあります"."<br>";
} else {
    echo "12はありません"."<br>";
}

$atstr = implode(",", $number);
var_dump($atstr);
echo "<br>";

$array = explode(",",$atstr);
var_dump($array)."<br>";
?>