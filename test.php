<?php 
function whatever()
{
    global $a;
    $a = 'WHATEVER';
}

$a = 'TEST';

echo $a . PHP_EOL;

whatever();

echo $a . PHP_EOL;
