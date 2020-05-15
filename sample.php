<?php

$a = 'test';
$b = '‚Å‚·';

$a = out($a).$b; 
var_dump($a);

function out($hoge) {
    $hoge = 'OK';
    return $hoge;
}

?>