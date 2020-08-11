<?php
// PHPの研修カリキュラム2-1
?>
<?php
/*
PHPの
研修
カリキュラム
2-1
*/
?>
<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>
<?php
echo "1.開発環境・検証環境・本番環境"."<br>";
echo "開発環境…開発するための環境"."<br>";
echo "検証環境…開発し終わった、リリース予定の機能をテストするための環境（XAMPP等）"."<br>";
echo "本番環境…デプロイする、エンドユーザーが使い始める環境"."<br>";
echo "2.基本設計書・詳細設計書"."<br>";
echo "基本設計書…ソフトウェアの動きを外から見た際の動きの設計。業務フロー、機能一覧表、ネットワーク構成図、テーブル定義、ER図、画面レイアウト、帳票レイアウト"."<br>";
echo "詳細設計書…基本設計の動きをどのように実現するかについて設計。機能設計書、データベースの物理設計書"."<br>";
echo "3.Ajax"."<br>";
echo "Ajax…一部の情報をサーバーに送信して、それを受け取り反映させる仕組み。
一部の情報のみリクエストするので、サーバーからレスポンスが帰ってこなくてもその他部分の作業が可能となる。
XMLHttpRequest（ブラウザ上でサーバーとHTTP通信を行うためのAPI）、
JavaScript、
DOM（HTMLをツリー構造として展開、アプリケーション側に文章の情報伝達、加工、変更を行う。）、
XML（HTMLと同様。複数のデータを同時に処理、どのデータがどの要素なのか判明可能
①ページ上でクリック
②JavaScript、XMLHttpRequestでサーバーに対してリクエスト送信
③サーバーで受け取った情報を処理（クライアントは操作継続可能）
④処理結果をJSONやXMLなどの形式で応答
⑤レスポンスを受けて、DOMでページを更新"."<br>";
?><img class="alignnone size-full wp-image-371" 
src="http://54.238.147.46/wp-
content/uploads/2020/04/update_task_status.png" alt="" width="716" 
height="180" data-pagespeed-url-hash="608921261" 
onload="pagespeed.CriticalImages.checkImageForCriticality(this)