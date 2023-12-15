<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function registerUser(){
    echo 'User registered';
};

registerUser();

//-----

$name = 'John';

function printName(){
    // to access global scoped variable, use 'global' keyword
    global $name;
    echo $name;
};

printName();

//-----

// Function declaration
function sum($num1, $num2){
    return $num1 + $num2;
};

echo sum(4, 7);

function multiply($num1 = 3, $num2 = 4){
    return $num1 * $num2;
};

echo multiply();

// Function expression
$subtract = function($num1, $num2){
    return $num1 - $num2;
};

echo $subtract(8, 2);

// Arrow function
$divide = fn($num1, $num2) => $num1 / $num2;

echo $divide(49, 7)

?>

