<?php
//try、catchは例外があった場合に実行する
try{
  //newでPDO（どのDBを使ってもOK）を初期化し、joytas のpassword12345が入力されたら、
  $db=new PDO('mysql:host=localhost;dbname=phpapps;charset=utf8','joytas','12345');
  //okを表示する
  echo 'OK';
  //dbに値null代入し切断
  $db=null;
  //try以外で例外が発生した場合の処理、PDOException＝PDOの例外処理実行　$eは任意の変数
}catch(PDOException $e){
  //getMessage()エラーメッセーで出力。dieは処理終了。
  die('エラーメッセージ:'.$e->getMessage());
}
