<?php
class Hoge{
    function hello(){
        print("Hello PHP!");
    }
}

$hoge = new Hoge();
$hoge->hello();
# => Hello PHP!と表示される
?>