<?php

define("CHECK_CONSTANT","Yes I'm Constant");
$intVar=1234;
$stringVar="I'm a String";
$boolVar=false;
$floatVar=12.34;
echo is_int($intVar);
echo is_int($floatVar);
echo is_string($stringVar);
echo is_bool($boolVar);
echo is_float($floatVar);
echo defined("CHECK_CONSTANT");