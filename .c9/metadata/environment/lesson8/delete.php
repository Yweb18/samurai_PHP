{"filter":false,"title":"delete.php","tooltip":"/lesson8/delete.php","undoManager":{"mark":27,"position":27,"stack":[[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":1}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":38},"action":"insert","lines":["//ifの条件でなければ、$_GET['id']に変数がセットされている場合"],"id":2}],[{"start":{"row":2,"column":23},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":3,"column":0},"end":{"row":3,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":3,"column":2},"end":{"row":3,"column":10},"action":"insert","lines":["  //例外指定"],"id":4}],[{"start":{"row":3,"column":2},"end":{"row":3,"column":3},"action":"remove","lines":[" "],"id":5},{"start":{"row":3,"column":0},"end":{"row":3,"column":2},"action":"remove","lines":["  "]}],[{"start":{"row":4,"column":6},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":63},"action":"insert","lines":["  //newでPDO（どのDBを使ってもOK）を初期化し、joytas のpassword12345が入力されたら、"],"id":7}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":[" "],"id":8},{"start":{"row":5,"column":2},"end":{"row":5,"column":4},"action":"remove","lines":["  "]}],[{"start":{"row":7,"column":4},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":7,"column":4},"end":{"row":9,"column":20},"action":"insert","lines":["  //sttは変数。変数$dbが入力されたら","    //prepareは文('NSERT INTO persons(name,age) VALUES(?,?)')を実行する準備","    //を行い、文オブジェクトを返す"],"id":10}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":58},"action":"remove","lines":["'NSERT INTO persons(name,age) VALUES(?,?)'"],"id":11},{"start":{"row":8,"column":16},"end":{"row":8,"column":49},"action":"insert","lines":["'DELETE FROM persons WHERE id=?')"]}],[{"start":{"row":8,"column":49},"end":{"row":8,"column":50},"action":"remove","lines":[")"],"id":12}],[{"start":{"row":10,"column":56},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":12,"column":49},"action":"insert","lines":[" //prerareで入力されたDBをbindValueで$_GET['id'],PDOに結び付ける","    //。PDO::PARAM_INTは変数の値を数値として扱う（bindValueには必要）"],"id":14}],[{"start":{"row":13,"column":50},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":32},"action":"insert","lines":["  //準備したprepareに入っているSQL文を実行"],"id":16}],[{"start":{"row":15,"column":20},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":["/"],"id":18},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["/"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["d"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":["b"]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":11},"action":"insert","lines":["初期化"],"id":19},{"start":{"row":16,"column":11},"end":{"row":16,"column":13},"action":"insert","lines":["する"]}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":6},"action":"remove","lines":["  "],"id":20}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"remove","lines":[" "],"id":21}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":53},"action":"insert","lines":["//try以外で例外が発生した場合の処理、PDOException＝PDOの例外処理実行　$eは任意の変数"],"id":22}],[{"start":{"row":19,"column":26},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":20,"column":4},"end":{"row":20,"column":38},"action":"insert","lines":[" //getMessage()エラーメッセーで出力。dieは処理終了"],"id":24}],[{"start":{"row":23,"column":1},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":25}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":1},"action":"insert","lines":["/"],"id":26},{"start":{"row":24,"column":1},"end":{"row":24,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":24,"column":2},"end":{"row":24,"column":15},"action":"insert","lines":["//read.phpに飛ぶ"],"id":27}],[{"start":{"row":24,"column":2},"end":{"row":24,"column":3},"action":"remove","lines":["/"],"id":28},{"start":{"row":24,"column":1},"end":{"row":24,"column":2},"action":"remove","lines":["/"]}]]},"ace":{"folds":[],"scrolltop":180,"scrollleft":0,"selection":{"start":{"row":16,"column":13},"end":{"row":16,"column":13},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":11,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1606751880762,"hash":"68180816a79cf8f27559c0c7494ec91de95c536c"}