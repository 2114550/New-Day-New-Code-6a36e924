<?php
$waarde = $argv[1];
$aantal = array(
    $fifty = 50,
    $twenty = 20,
    $ten = 10,
    $five = 5,
    $two = 2,
    $one = 1
);
foreach($aantal as $value){
    $keer = floor($waarde / $value);
    $waarde = $waarde - ($keer * $value);
    if($keer > 0){
        echo $keer . "x". $value . PHP_EOL;
    }
}