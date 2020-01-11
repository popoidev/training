<?php 

    // ////////////
    // BASICS /////
    // ////////////

    // {} curly braces 
    // [] sqaure brackets or brackets
    // () parentheses

    $fruit = 1; // integer = whole number
    $fruit = false; // boolean true or false 
    $fruit = 'apple'; // string
    $fruit = ['asd']; // array or array('asd', 'asd1')
    $fruit = 1.1; // float or double
    
    // object

    class Fruit { // class [Class Name]
        private $name;
        public $color;
        private $height = '3 inches';
        protected $width = '3 inches';

        public function __constructor ($name, $color = null) {
            $this->$name = name;
            $this->$color = $color;
        }

        public function clean () { // public or private or protected function [function_name]
            // add clean functionality
        }
    }

    $fruit = new Fruit(); // new [Class Name]( ...args ) e.g. new Fruit ('orange', 'red') // e.g. new Fruit ('orange') 

    // functions 

    function printName (string $firstName, string $lastName) { // function [name]
        echo $firstName ." ". $lastName;
    }

    printName('Cris', 'Dave'); // calling functions

    // ///////////////////
    // END OF BASICS /////
    // ///////////////////

    // ////////////////
    // CONDITIONS /////
    // ////////////////

    // if else ...

    // >, <, >=, <=, ==, ===, !=, !==, !, &&, || 
    // PEMDAS - Parentheses, Exponent, Multiplication / Division, Addition / Subtraction
    // 2 x (2 + 1)
    // double equals vs. triple equals e.g. (1 == '1') true e.g (1 === '1') false
    // > vs. >=


    $age = 20;
    $sex = "Male";

    if ($age > 18 || ($sex == 'Male' && 1 === 1)) { // 18 > 18
        echo 'old and male';
    } elseif (28 > 28 || 28 >= 28) { // false true
    
    } else if ('asd' >= 'asdsad') {
        echo 'validated?';
    } else {
        echo 'young';
    }

    switch ($age) {
        case 18:
            echo 'old';
            break;
        default:
            break;
    }

    // ///////////////////////
    // END OF CONDITIONS /////
    // ///////////////////////


    // ///////////////////////
    // LOOPS /////
    // ///////////////////////

    $numbers = range(0, 5); // [5, 7, 9]
    // $letters = range('a', 'z');

    // for 
    $a = 0;
    $b = 0;
    // pre increment ++$a
    // post increment $a++

    // for ($a; $a < count($numbers); $a++) { // for ([variable initial value] [comparison] [iteration])
    //     echo $numbers[$a];
    // }

    // 2
    // 2 <= 6 true
    // 3

    // 3
    // 3 <= 6 true
    // 4

    // 4
    // 4 <= 6 true
    // 5

    // 5
    // 5 <= 6 true
    // 6

    // 6
    // 6 <= 6 true
    // 7

    // 7
    // 7 <= 6 false
    // 8

    // foreach

    echo "<h1>Foreach</h1>";

    $cars = [
        'car1' => 'Tesla',
        'car2' => 'Hilux',
        'car3' => 'Toyota'
    ];

    $cars = [
     'Tesla',  // [key] => [value]
     'Hilux',  // [key] => [value]
     'Toyota'  // [key] => [value]
    ];
    
    // $cars[0] // array accessing values
    // $cars->name // object accessing values

    foreach ($cars as $key => $car) { // foreach ([iterable values] as [single value])
        echo "$key --- $car <br>";
    }

    // while
    // $ctr = 0;

    // while ($ctr < 3) { // while ([condtional])
    //     echo $cars[$ctr];

    //     $ctr++;
    // }

    // // do while

    // do {
    //     // do something first
    //     // if () {

    //     // } else {

    //     // }

    //     $ctr++;
    // } while (); // condition

    // ///////////////////////
    // END LOOPS /////
    // ///////////////////////

?>
