<?php
  
$noun = 'test';
$auxiliaryVerb = '�ł�';

$noun = out($noun).$auxiliaryVerb;
var_dump($noun);

function out($hoge) {
    $hoge = 'OK';
    return $hoge;
}

?>