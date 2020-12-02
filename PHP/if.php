<?php


#偶数奇数それぞれ空の関数初期設定する
$even_num = [];
$odd_num = [];

#その値を作成したそれぞれの配列に追加する関数sort_numberを使い、関数宣言する
function sort_number($num){
    #グローバル変数でスケール外の $even_num,$odd_num;を参照可能にする
    global $even_num, $odd_num;
    #$numが2で割り切れるとき、$numを$even_numに追加する
     if($num % 2 == 0){
    
        
        array_push($even_num, $num);
    #$numが2で割り切れないとき、$numを$odd_numに追加する
    }else{
        array_push($odd_num, $num);
    }    
}

?>