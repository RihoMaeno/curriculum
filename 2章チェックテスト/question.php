<?php
$my_name=$_POST['my_name'];//POST送信で送られてきた名前を受け取って変数を作成

$port = ["80", "22", "20","21"];
$lang = ["PHP", "Python", "JAVA","HTML"];
$command = ["join", "select", "insert","update"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$portanswer=$port[0];
$langanswer=$lang[3];
$commandanswer=$command[1];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
?>

<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"> 
<title>question</title> 
<link rel="stylesheet" href="question.css">
</head>
<body>
<p>お疲れ様です<?php echo $my_name; ?>
<!--POST通信で送られてきた名前を出力-->さん</p>
<form action="answer.php" method="post">
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<?php
foreach ($port as $value1){ ?>
<input type="radio" name="port" value="<?php echo $value1; ?>">
<?php echo $value1;} ?>
 <!--③ 問題のradioボタンを「foreach」を使って作成する-->

<h2>②Webページを作成するための言語は？</h2>
<?php
foreach ($lang as $value2){ ?>
<input type="radio" name="lang" value="<?php echo $value2; ?>">
<?php echo $value2;} ?>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php
foreach ($command as $value3){ ?>
<input type="radio" name="command" value="<?php echo $value3; ?>">
<?php echo $value3;} ?>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<input type="hidden" name="portanswer" value="<?php echo $portanswer; ?>" />
<input type="hidden" name="langanswer" value="<?php echo $langanswer; ?>" />
<input type="hidden" name="commandanswer" value="<?php echo $commandanswer; ?>" />
<input type="hidden" name="my_name" value="<?php echo $my_name; ?>" />
<?php echo "<br>"?>
<input type="submit" value="回答する" />
<!--問題の正解の変数と名前の変数をanswer.phpに送る-->
</form>
</body>
</html>