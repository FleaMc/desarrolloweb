<?php

function generateRandomString($length = 10) { 
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
} 

$nuevaReferencia = generateRandomString();
$val='.txt';
$conc = $nuevaReferencia .$val;
echo "$conc"
?>