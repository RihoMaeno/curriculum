<?php 
$my_name = $_POST['my_name'];

$port = $_POST['port'];
$lang = $_POST['lang'];
$command = $_POST['command'];

$portanswer = $_POST['portanswer'];
$langanswer = $_POST['langanswer'];
$commandanswer = $_POST['commandanswer'];
// var_dump($_POST);
// die;
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
function port($port, $portanswer){
    if($port==$portanswer){
        echo "正解！";
    }else{
        echo "残念...";
    }
}
function lang($lang,$langanswer){
if($lang==$langanswer){
    echo "正解！";
}else{
    echo "残念...";
}
}
function command($command,$commandanswer){
if($command==$commandanswer){
    echo "正解！";
}else{
    echo "残念...";
}
}

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"> 
<title>answer</title> 
<link rel="stylesheet" href="answer.css">
</head>
<body>
<p><?php echo $my_name; ?><!--POST通信で送られてきた名前を表示-->さんの結果は・・・？</p>
<p>①の答え</p>
<?php
port($port, $portanswer);
?>
<!--作成した関数を呼び出して結果を表示-->

<p>②の答え</p>
<?php
lang($lang,$langanswer);
// lang();
?>
<!--作成した関数を呼び出して結果を表示-->

<p>③の答え</p>
<?php
command($command,$commandanswer);
// command();
?>
<!--作成した関数を呼び出して結果を表示-->
</body>
</html>
