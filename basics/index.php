<?php

// Displaying output
// echo "Hello World";

// Variables
$varname;

// Data Types
/**
 * String
 * Integer
 * Float
 * Boolean
 * Array
 */

// Arithmetic Operators
/**
 * +, -, *, /, %, ** (exponential)
 */
// echo (2**0);

// Assignment Operators
/**
 * =
 * += , -= , *=, /=
 */
// $a = 1;
// echo $a . "<br/>";
// $a = $a + 1;
// echo $a . "<br/>";

// Comparison Operators
/**
 * ==, !=, ===, !==, <, >, <=, >=
 */
// echo 1 === 1 ? 'true' : 'false';

// Increment / Decrement Operator
/**
 * ++, --
 * Pre Inc/Dec
 * Post Inc/Dec
 */
// $a = 1;
// echo ++$a + $a;
// echo $a;

// Logical Operator
/**
 * &&, || 
 */

// Conditional Statements
/**
 * IF
 * ELSE
 * ELSEIF
 */
// echo 1 == 1 ? "1" : (0==1 ? "..." : "...");
// if(1==1)
//     echo "1";
// else
//     echo "0";

// Switch Statements

// Loops
/**
 * While() {}
 * Do {} while();
 * For(init; condition; increment/decrement){}
 * Foreach(source as var_placeholder) {}
 */
$a = array(1,2,3);

// foreach($a as $var) {
//     echo $var;
// }

// for($i=0; $i < count($a); $i++) {
//     echo $a[$i];
// }

// Arrays
/**
 * Indexed Array (standard)
 * Associative array
 * Multi-dimensional array
 */
$a = array(
    0 => array(
        "id" => 1,
        "name" => 'jade',
        "pass" => '123'
    ),
    1 => array(
        "id" => 2,
        "name" => 'jade2',
        "pass" => '1232'
    )
);

foreach($a as $var) {

    echo "The user is ${var['name']} with an id of ${var['id']}";
    echo "<br/>";
}

// for($i = 0; $i < count($a); $i++) {
//     echo "id: " . $a[$i]['id'] . "<br/>";
//     echo "name: " . $a[$i]['name'] . "<br/>";
//     echo "pass: " . $a[$i]['pass'] . "<br/>";
//     echo "<br/>";
// }