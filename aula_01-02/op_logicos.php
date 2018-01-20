<?php

$false = true;
$true = false;

$var1 = true;
$var2 = false;
$var3 = true;
$var4 = false;

var_dump($var1 and $var2);
echo "<hr>";
var_dump($var1 and $var3);
echo "<hr>";
var_dump($var2 and $var4);
echo "<hr>";

var_dump($var1 && $var2);
echo "<hr>";
var_dump($var1 && $var3);
echo "<hr>";
var_dump($var2 && $var4);
echo "<hr>";

var_dump($false or $true);
echo "<hr>";
var_dump($true or $true);
echo "<hr>";
var_dump($true or $false);
echo "<hr>";

var_dump($false || $true);
echo "<hr>";
var_dump($true || $false);
echo "<hr>";
var_dump($true || false);
echo "<hr>";

var_dump($false xor true);
echo "<hr>";
var_dump($true xor $true);
echo "<hr>";
var_dump($true xor $false);
echo "<hr>";

var_dump(! $false);
echo "<hr>";

