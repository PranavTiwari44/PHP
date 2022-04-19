<?php

$string_test = "test";
$string_test2 =  "test2";
$string_test3 = "3";
$integer_test = 9;
$float_test = 2.0;
$total = $string_test3 * $integer_test;

var_dump($string_test);
var_dump($integer_test . $string_test);
var_dump($float_test);
var_dump($integer_test * $float_test);
var_dump($string_test . " " . $string_test2);
var_dump($total);
