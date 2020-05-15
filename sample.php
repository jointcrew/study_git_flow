<?php
  
$noun = 'test';
$auxiliaryVerb = 'です';

$noun = out($noun, $auxiliaryVerb); 
var_dump($noun);

function out($hoge, $fuga) {
    $hoge = 'OK';
    return $hoge.$fuga;
}

?>