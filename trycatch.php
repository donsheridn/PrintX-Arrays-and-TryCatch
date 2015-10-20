<?php
/**
 * Created by PhpStorm.
 * User: Don
 * Date: 11/17/2014
 * Time: 6:56 PM
 */

class TireException extends \RuntimeException {};
class CarException extends \RuntimeException {};

function tire (){
    throw new \Exception("Tire Exception Message");
}

function car()  {
    tire();
}

function PrintMessage($e){
    echo "File: " .$e->getfile(). PHP_EOL;
    echo "Line: ".$e->getline(). PHP_EOL;
    echo "Message: ".$e->getmessage(). PHP_EOL;
    echo "Trace: " . $e->getTraceAsString() . PHP_EOL;
}

try {
    car();

}catch (TireException $e){
    echo "This is the TireException".PHP_EOL;
}
catch (CarException $e){
    echo "This is the CarException".PHP_EOL;
}
catch (\Exception $e){
//    echo "File: " .$e->getfile(). PHP_EOL;
//    echo "Line: ".$e->getline(). PHP_EOL;
//    echo "Message: ".$e->getmessage(). PHP_EOL;
//    echo "Trace: " . $e->getTraceAsString() . PHP_EOL;
    PrintMessage($e);
}

echo "Hello World". PHP_EOL;