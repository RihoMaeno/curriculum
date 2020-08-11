<?php
$testFile = "test.txt";
$contents = "こんにちは！";
if (is_writable($testFile)) {// 書き込み可能ならば
    $fp = fopen($testFile, "w");// ファイルを開く
    fwrite($fp, $contents); // ファイルに書き込む
    fclose($fp);// ファイルを閉じる
    echo "finish writing!!";// 内容の表示
} else { // 書き込み不可ならば
    echo "not writable!";
    exit;
}
echo "<br>";

$test_file = "test2.txt";
if (is_readable($test_file)) {// 読み込み可能ならば
    $fp = fopen($test_file, "r");// ファイルを開く
    while ($line = fgets($fp)) {// 1行ずつ読み込む
        echo $line.'<br>';// 1行ずつ出力
    }
    fclose($fp);// ファイルを閉じる
} else {
    echo "not readable!"; // 読み込み不可ならば
    exit;
}
?>