<?php

$a = 'test';
$b = '�ł�';

$a = out($a).$b; 
var_dump($a);

function out($hoge) {
    $hoge = 'OK';
    return $hoge;
}

?>