<?php

trait mytrait {                              //I needed to upgrade my PHP version from 5.3 to 5.4 for this to work
    function PrintMessage($e){
    echo "File: " .$e->getfile(). PHP_EOL;
    echo "Line: ".$e->getline(). PHP_EOL;
    echo "Message: ".$e->getmessage(). PHP_EOL;
    echo "Trace: " . $e->getTraceAsString() . PHP_EOL;
    }
}


class TireException extends \RuntimeException {};
class CarException extends \RuntimeException {};

class myclass {

    use mytrait;

    function myclass(){            // This is an Old Style PHP4
        $this->run();
    }

    function tire (){
        throw new \Exception("Tire Exception Message");
    }

    function car()  {
        $this->tire();
    }

//    function PrintMessage($e){
//        echo "File: " .$e->getfile(). PHP_EOL;
//        echo "Line: ".$e->getline(). PHP_EOL;
//        echo "Message: ".$e->getmessage(). PHP_EOL;
//        echo "Trace: " . $e->getTraceAsString() . PHP_EOL;
//    }

    function run() {

        try{
            $this->car();

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
            $this->PrintMessage($e);
        }
    }

}

$h =  new myclass();        // This runs the class, as it is called when a new class instance is instantiated
                            // Once the class is called the myclass() constructor is called, which then calls
                            // the run() method of the class which triggers all the functionality
//echo "Hello World". PHP_EOL;
