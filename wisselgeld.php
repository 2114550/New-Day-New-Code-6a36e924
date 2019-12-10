<?php
$waarde = $argv[1];
define("CONSTANT", array(
    $fifty = 50,
    $twenty = 20,
    $ten = 10,
    $five = 5,
    $two = 2,
    $one = 1
));
foreach(CONSTANT as $value){
    $keer = floor($waarde / $value);
    $waarde = $waarde - ($keer * $value);
    if($keer > 0){
        echo $keer . "x". $value . PHP_EOL;
    }
}