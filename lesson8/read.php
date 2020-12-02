<?php
try{
 ////newでPDO（どのDBを使ってもOK）を初期化し、joytas のpassword12345が入力されたら、
  $db=new PDO('mysql:host=localhost;dbname=phpapps;charset=utf8','joytas','12345');
  //sttは変数。変数$dbが入力されたら
  //prepareは文('SELECT * FROM persons)を実行する準備を行い、文オブジェクトを返す
  $stt=$db->prepare('SELECT * FROM persons');
  //上のsttの内容をデータベースから抽出
  $stt->execute();
  //try以外で例外が発生した場合の処理、PDOException＝PDOの例外処理実行　$eは任意の変数
}catch(PDOException $e){
  //getMessage()エラーメッセーで出力。dieは処理終了。
  die('エラーメッセージ:'.$e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHPLesson</title>
</head>
<body>
<a href="create.php">新規登録</a>
<table border="1">
<!-- fetch はPDOで指定し、その後取得したデータベースの配列の形式を指定する　-->
<?php while($row=$stt->fetch()):?>
<!-- 行　-->
<tr>
<!-- データ　セル phpの$row['id'を代入 -->
<td><?=$row['id']?></td>
<!-- データ　セル　phpの$row['id'を代入-->
<td><?=$row['name']?></td>
<!-- データ　セル　phpの$row['id'を代入-->
<td><?=$row['age']?></td>
<!-- update.phpのidカラムに更新というリンクをつける　-->
<td><a href="update.php?id=<?=$row['id']?>">更新</a>
<!-- delete.phpのidカラムの削除というリンクを付け、クリックすると、削除してもよろしいでしょうかというポップアップが出て、データを削除する　-->
<a href="delete.php?id=<?=$row['id']?>" onclick="return confirm('id=<?=$row['id']?>を削除してよろしいですか？');">削除</a></td>
</tr>
<!-- 処理終了-->
<?php endwhile;?>
</table>
</body>
</html>