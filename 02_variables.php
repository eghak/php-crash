<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'John';
$age = 40;
$has_kids = false;
$cash_on_hand = 20.75;

// echo $name;
// echo $age;

echo $name . ' is' . $age . ' year old.';
echo "${name} is ${age} years old.";

$x = '5' + '5'; // this will return 10 int instead of 55 unlike in javascript

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
echo DB_NAME;

?>