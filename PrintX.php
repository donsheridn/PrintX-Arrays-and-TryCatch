<?php
/**
 * Created by PhpStorm.
 * User: Don
 * Date: 10/20/14
 * Time: 6:42 PM
 * to run use: php PrintX.php 10
 */

$Number = $argv[1];
$VerticalLines = ($Number * 2);    //because it needs symmetry
$LinePositionsNeeded = $Number * 4;
$VArray = array();
$StartPosition = 0;
$LineNumber = 1;                   //starts at 1 because the array starts at 0
$XNumber = 0;
$HalfXsNumber = 0;
$FirstStartPosition = 0;         //is always zero for the first line, and increases by 1 for every line
$FirstFinishPosition = 0;

$Spaces = 0;
$MultiplyByFour = 4;
$LastStartPosition = 0;
$LastFinishPosition = 0;

if (is_numeric($Number)) {

    for ($i = 0; $i < $VerticalLines; $i++) {              //Loop Vertical Line Array

        for ($l = 0; $l < $LinePositionsNeeded; $l++) {     //$LinePositionNeeded = $Number * 4, as
           $HArray[] = ' ';
        }
        $VArray[] = $HArray;

        if ($i < $Number){                          //Lines up to + including middle, array pos 0-4

            $FirstStartPosition = $i;               //is always zero for first line

            $LineNumber = 1;
            $LineNumber = $LineNumber + $i;         //Starts at 1 because the middle line has no spaces
                                                //and for more accurate line calculations (as zero won't work)
            $XNumber = $LineNumber * 2;         //this total number of #'s are needed in the line
            $HalfXsNumber = $LineNumber;

            $FirstFinishPosition = $FirstStartPosition + $HalfXsNumber;

            for ($j = $FirstStartPosition; $j < $FirstFinishPosition; $j++) {    //Print the #'s at correct places
                $VArray[$i][$j] = '#';
            }

            $Spaces = ($Number - $LineNumber) * $MultiplyByFour;
                                                    // after line 6 this is reversed to ($LineNumber - $Number)
                                                    // as it starts decreasing
            $LastStartPosition = ($FirstFinishPosition ) + $Spaces;

            $LastFinishPosition = $LastStartPosition + $HalfXsNumber;

            for ($m = $LastStartPosition; $m < $LastFinishPosition; $m++) {    //Print the #'s at correct places
                $VArray[$i][$m] = '#';
            }

        }
        elseif ($i == $Number){                    //Line after middle, line 6 array pos 5

            $FirstStartPosition = $i-1;            //-1 to give accurate array position

            $LineNumber1 = $i -1 ;               // -1 so as to keep the same as the previous middle line

            $XNumber = $LineNumber * 2;         //this total number of #'s are needed in the line
            $HalfXsNumber = $LineNumber;

            $FirstFinishPosition = $FirstStartPosition + $XNumber;

            for ($j = $FirstStartPosition; $j < $FirstFinishPosition; $j++) { //Put the #'s at correct places in HArray
                $VArray[$i][$j] = '#';
            }
        }

        elseif ($i > $Number) {                       //Lines after middle+1, line 7 array pos 6

            $FirstStartPosition = $FirstStartPosition - 1;   //This carries over from above and should be
                                                             //
            $LineNumber = $i + 1;               //as $i is always 1 behind $LineNumber due to array 0

            $XNumber = $XNumber - 2;            //-2 because 1 less # is needed on either side
            $HalfXsNumber = $XNumber / 2;

            $FirstFinishPosition = $FirstStartPosition + $HalfXsNumber;

            for ($j = $FirstStartPosition; $j < $FirstFinishPosition; $j++) {    //Print the #'s at correct places
                $VArray[$i][$j] = '#';
            }

            $Spaces = ($LineNumber - $Number - 1) * $MultiplyByFour;
            // after line 6 this is reversed to ($LineNumber - $Number)
            // as it starts decreasing
            $LastStartPosition = ($FirstFinishPosition ) + $Spaces;

            $LastFinishPosition = $LastStartPosition + $HalfXsNumber;

            for ($m = $LastStartPosition; $m < $LastFinishPosition; $m++) {    //Print the #'s at correct places
                $VArray[$i][$m] = '#';
            }

        }

        for ($k = 0; $k <= $LastFinishPosition; $k++) {     //Print the Horizontal Array
            print $VArray[$i][$k];
        }

        print PHP_EOL;                    //Move to Next Line

//        echo 'number is '.$number;
    }

} else {
    echo 'The input: "'.$number.'" is not valid'.PHP_EOL;
}