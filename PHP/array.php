<?php
$dic = ["x"=> 10, "y"=> 20];
$dic["y"] = 40;

var_dump($dic)
# => array(2) {
#      'x' =>
#      int(10)
#      'y' =>
#      int(40)
#    }
?>