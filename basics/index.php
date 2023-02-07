<?php

// Displaying output
// echo "IT 3b only.";

// Variables
$var_name;

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

// Assignment Operators
/**
 * =
 * += , -= , *=, /=
 */

// Comparison Operators
/**
 * ==, !=, ===, !==, <, >, <=, >=
 */
// echo 1 === "1" ? 'true' : 'false';

// Increment / Decrement Operator
/**
 * ++, --
 * Pre Inc/Dec
 * Post Inc/Dec
 */
// $a = 1;
// echo "the value of a is ".  ++$a . "<br/>the value of a after post increment is ".$a;
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

// Switch Statements

// Loops
/**
 * While() {}
 * Do {} while();
 * For(init; condition; increment/decrement){}
 * Foreach(source as var_placeholder) {}
 */
// $a = array('A', 'B', 'C');
// foreach($a as $val) {
//     echo $val;
// }

// Arrays
/**
 * Indexed Array (standard)
 * Associative array
 * Multi-dimensional array
 */
$a = array (
    array(0,1,2),
    array(3,"4",5)
);

// var_dump($a);

echo "<pre>";
var_dump($a[1]);
echo "</pre>";

