<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for($x = 5; $x <= 10; $x++){
    echo 'Number ' . $x . '<br>';
};

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 3;

while($x <= 5){
    echo 'Number ' . $x . '<br>';
    $x++; // this to prevent infinite loop since 3 is always less than 5
};

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$y = 1;

do{
    echo 'Number ' . $y . '<br>';
    $y++;
} while($y <= 5);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

foreach($posts as $post){
    echo $post . '<br>';
};

foreach($posts as $index => $post){
    echo $index + 1 . ' - ' . $post . '<br>';
};

$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'johndoe@mail.com'
];

foreach($person as $key => $value){
    echo "$key - $value<br>";
};
