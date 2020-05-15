<?php
  
$noun = 'test';
$auxiliaryVerb = '‚Å‚·';

$noun = out($noun).$auxiliaryVerb;
var_dump($noun);

function out($hoge) {
    $hoge = 'OK';
    return $hoge;
}

?>