<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

if($age >= 18){
    echo 'You are old enough to vote';
} else{
    echo 'You are not old enough to vote';
};

$t = date("H"); // this is a php date function to get day, month, hour, etc.

if($t < 12){
    echo 'Good morning';
} else if($t < 17){
    'Good afternoon';
} else{
    echo 'Good evening';
};

$posts = ['First Post'];

if(!empty($posts)){
    echo $posts[0];
} else{
    echo 'No post';
}

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

echo !empty($posts) ? $posts[0] : 'No Posts';

$firstPost = $posts[0] ?? null;

echo $firstPost;

/* -------- Switch Statements ------- */

$favColor = 'green';

switch($favColor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, blue, or green';
};