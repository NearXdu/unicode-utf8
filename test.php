<?php
require_once "vendor/autoload.php";

$test = new Crlt\Tools\Unicode2Utf();
echo $test->Transform("head\u4f60\u597d\u4e16\u754ctail");

