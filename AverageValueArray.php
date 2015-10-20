<?php
/**
 * Created by PhpStorm.
 * User: Don
 * Date: 11/3/14
 * Time: 7:41 PM
 */

$array = [11234, 1234, 3456, 47, 67, 563, 4567, 7866, 5687, 6578];

$count = count($array);
print "Average of all numbers in the array: ".array_sum($array) / $count;
print PHP_EOL.PHP_EOL;

print "Count of the numbers in the array: ".$count;
print PHP_EOL.PHP_EOL;

$middle = $count /2;
print "The position of the middle number in the array: ".$middle;
print PHP_EOL.PHP_EOL;

echo "The actual middle number in the array: ";
print_r(array_slice($array,$middle,1));
print PHP_EOL.PHP_EOL;

$index =abs($count/2);
echo "The index of the middle number in the original array is: ".$index;
//unset($array[$index]);
//print_r($array);
print PHP_EOL.PHP_EOL;

$newArray = array_slice($array, $index);
echo "The new array after splitting it is: ".PHP_EOL;
print_r($newArray);
print PHP_EOL.PHP_EOL;

$replace = array_merge(['$'], $newArray);
echo "The array after merge is: ".PHP_EOL;
print_r($replace);
print PHP_EOL.PHP_EOL;

array_splice($array, $index, $count, $replace);
echo "The array after splice is: ".PHP_EOL;
print_r($array);
print PHP_EOL.PHP_EOL;