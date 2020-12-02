<?php
//$_POSTの要素数が0以上の時実行
if(count($_POST)>0){
  //例外指定
  try{
    //newでPDO（どのDBを使ってもOK）を初期化し、joytas のpassword12345が入力されたら、
    $db=new PDO('mysql:host=localhost;dbname=phpapps;charset=utf8','joytas','12345');
    //sttは変数。変数$dbが入力されたら
    //prepareは文('NSERT INTO persons(name,age) VALUES(?,?)')を
    //実行する準備を行い、文オブジェクトを返す
    $stt=$db->prepare('INSERT INTO persons(name,age) VALUES(?,?)');
    //prerareで入力されたDBをbindValueで$_POST['name']に結び付ける
    $stt->bindValue(1,$_POST['name']);
    //prerareで入力されたDBをbindValueでint)$_POST['age']に結び付ける。
    //PDO::PARAM_INTは変数の値を数値として扱う（bindValueには必要）
    $stt->bindValue(2,(int)$_POST['age'],PDO::PARAM_INT);
    //準備したprepareに入っているSQL文を実行
    $stt->execute();
    //header関数は、HTTPヘッダー情報を送信するときに使用。
    //locationとURLを付けると、そのURLに飛んでいく。
    header('location:./read.php');
    //リンク先に飛んだあと、こちらは終了
    exit;
    //try以外で例外が発生した場合の処理、PDOException＝PDOの例外処理実行　$eは任意の変数
  }catch(PDOException $e){
     //getMessage()エラーメッセーで出力。dieは処理終了。
    die('エラーメッセージ:'.$e->getMessage());
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHPLesson</title>
</head>
<body>
<form method="post">
<p>名前:<input type="text" name="name"></p>
<p>年齢:<input type="number" name="age"></p>
<button type="submit">送信</button>
</form>
</body>
</html>
