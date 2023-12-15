<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear'];

// Get length
echo count($fruits);

// Search array
var_dump(in_array('apple', $fruits));

// Add to array
$fruits[] = 'grape'; // 1st way add at the end
array_push($fruits, 'blueberry', 'strawberry'); // 2nd way add at the end
array_unshift($fruits, 'mango'); // add in the beginning

//Remove from array
array_pop($fruits); // remove the last element
array_shift($fruits); // remove the 1st element
unset($fruits[2]); // remove specific element. It also remove the index

// Split into 2 chunks
$chunked_array = array_chunk($fruits, 2);

print_r($fruits);
print_r($chunked_array);

//-----

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

// Merge arrays
$arr3 = array_merge($arr1, $arr2);

// Use spread operator
$arr4 = [...$arr1, ...$arr2];

print_r($arr3);
print_r($arr4);

//-----

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

// Array combine
$c = array_combine($a, $b); // $a will be keys, $b will be values (object like)

print_r($c);

// Array keys
$keys = array_keys($c); // get the keys and put it as an array (object like)

print_r($keys);

// Flip the keys and values
$flipped = array_flip($c); // flip the keys and values

print_r($flipped);

// Range
$numbers = range(1, 20); // put the start number and the end number

print_r($numbers);

// Map array
$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);

print_r($newNumbers);

// Filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

print_r($lessThan10);

// Reduce
$sum = array_reduce($numbers, fn($acc, $curr) => $acc + $curr);

print_r($sum);
var_dump($sum);

?>