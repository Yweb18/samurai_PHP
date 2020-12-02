<?php
//もし$_POSTの要素数が0以上の時であれば実行
if(count($_POST)>0){
  //例外指定
  try{
    //dbをnullにして初期化
    $db=null;
    //newでPDO（どのDBを使ってもOK）を初期化し、joytas のpassword12345が入力されたら、
    $db=new PDO('mysql:host=127.0.0.1;dbname=phpapps;charset=utf8','joytas','12345');
    //sttは変数。変数$dbが入力されたら
    //prepareは文('UPDATE persons SET name=? , age=? WHERE id=?')を実行する準備を行い、文オブジェクトを返す
    $stt=$db->prepare('UPDATE persons SET name=? , age=? WHERE id=?');
    //prerareで入力されたDBをbindValueで$_POST['name']に結び付ける
    $stt->bindValue(1,$_POST['name']);
    //prerareで入力されたDBをbindValueでint)$_POST['age']に結び付ける。
    //PDO::PARAM_INTは変数の値を数値として扱う（bindValueには必要）
    $stt->bindValue(2,$_POST['age'],PDO::PARAM_INT);
    //prerareで入力されたDBをbindValueでint)$_POST['id']に結び付ける。
    //PDO::PARAM_INTは変数の値を数値として扱う（bindValueには必要）
    $stt->bindValue(3,$_POST['id'],PDO::PARAM_INT);
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

//ifの条件でなければ、$_GET['id']に変数がセットされている場合
}else if(isset($_GET['id'])){
  //例外指定
  try{
     //newでPDO（どのDBを使ってもOK）を初期化し、joytas のpassword12345が入力されたら、
    $db=new PDO('mysql:host=localhost;dbname=phpapps;charset=utf8','joytas','12345');
    //sttは変数。変数$dbが入力されたら
    //prepareは文('NSERT INTO persons(name,age) VALUES(?,?)')を実行する準備
    //を行い、文オブジェクトを返す
    $stt=$db->prepare('SELECT * FROM persons WHERE id=?');
    //prerareで入力されたDBをbindValueで$_GET['id'],PDOに結び付ける
    //。PDO::PARAM_INTは変数の値を数値として扱う（bindValueには必要）
    $stt->bindValue(1,$_GET['id'],PDO::PARAM_INT);
    //準備したprepareに入っているSQL文を実行
    $stt->execute();
    //fetchは連想配列として取得します
    //フェッチモードとは、PDOでデータベースからデータを取り出した際の
    //「配列の形式を指定するモード」
    $result=$stt->fetch(PDO::FETCH_ASSOC);
    //もし型と値が違う場合
    if($result===false){
    //すべてブランク
      $name='';
      $age='';
      $id='';
    //そうでなければ  
    }else{
      //name,age,idを更新
      $name=$result['name'];
      $age=$result['age'];
      $id=$result['id'];
    }
   //try以外で例外が発生した場合の処理、PDOException＝PDOの例外処理実行　$eは任意の変数
  }catch(PDOException $e){
     //getMessage()エラーメッセーで出力。dieは処理終了
    die('エラーメッセージ:'.$e->getMessage());
  }
  //それ以外 if else if以外
}else{
  //read.phpに飛ぶ
  header('Location:./read.php');
  //リンク先に飛んで終了
  exit;
}
//関数宣言
function h($str){
  //htmlspecialchars=HTMLエンティティ化。
  //ENT_QUOTES,=一般的なフラグ指定（シングルクオートとダブルクオートを共に変換する。）
  // return で戻り値指定
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 <title>PHPLesson</title>
 </head>
 <body>
   <form method="post">                             <!--phpとリンクしてる-->
   <p>名前:<input type="text" name="name" value="<?=h($name)?>"></p>
   <p>年齢:<input type="number" name="age" value="<?=h($age)?>"></p>
   <input type="hidden" name="id" value="<?=h($id)?>">
   <button type="submit">送信</button>
   </form>
 </body>
 </html>

