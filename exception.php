<?php
/**
 * Created by PhpStorm.
 * User: Don
 * Date: 11/17/2014
 * Time: 6:42 PM
 */
$numerator = $argv[1];
$denominator = $argv[2];


function division($numerator, $denominator)
{
    if ($denominator != 0) {
        return $numerator / $denominator;
    }
    else {
        throw new \Exception("You are attempting to divide by zero you fool!");
    }

}

echo division($numerator, $denominator).PHP_EOL;