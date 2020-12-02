<?php
//ifの条件でなければ、$_GET['id']に変数がセットされている場合
if(isset($_GET['id'])){
 //例外指定
  try{
   //newでPDO（どのDBを使ってもOK）を初期化し、joytas のpassword12345が入力されたら、
    $db=new PDO('mysql:host=localhost;dbname=phpapps;charset=utf8','joytas','12345');
      //sttは変数。変数$dbが入力されたら
    //prepareは文('DELETE FROM persons WHERE id=?')を実行する準備
    //を行い、文オブジェクトを返す
    $stt=$db->prepare('DELETE FROM persons WHERE id=?');
    //prerareで入力されたDBをbindValueで$_GET['id'],PDOに結び付ける
    //。PDO::PARAM_INTは変数の値を数値として扱う（bindValueには必要）
    $stt->bindValue(1,$_GET['id'],PDO::PARAM_INT);
    //準備したprepareに入っているSQL文を実行
    $stt->execute();
    //db初期化する
    $db=null;
//try以外で例外が発生した場合の処理、PDOException＝PDOの例外処理実行　$eは任意の変数
  }catch(PDOException $e){
     //getMessage()エラーメッセーで出力。dieは処理終了
    die('エラーメッセージ:'.$e->getMessage());
  }
}
//read.phpに飛ぶ
header('location:./read.php');

