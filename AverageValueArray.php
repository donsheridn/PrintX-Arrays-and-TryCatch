<?php
/**
 * Created by PhpStorm.
 * User: Don
 * Date: 11/3/14
 * Time: 7:41 PM
 */

$array = [11234, 1234, 3456, 47, 67, 563, 4567, 7866, 5687, 6578];

$count = count($array);
print array_sum($array) / $count;
print PHP_EOL;
print $count;
print PHP_EOL;

$middle = $count /2;
print $middle;
print PHP_EOL;
print_r(array_slice($array,$middle,1));
print PHP_EOL;
$index =abs($count/2);
//unset($array[$index]);
//print_r($array);
print PHP_EOL;

$endOfArray = array_slice($array, $index);
$replace = array_merge(['$'], $endOfArray);
array_splice($array, $index, $count, $replace);
print_r($array);