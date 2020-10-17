<?php
// the if statement - conditional


$salary = 150000;

// if($salary >= 200000) {
//     echo 'YAY!';
// } 
// else {
//     echo ':(';
// }


if($salary >= 200000) {
    echo 'woo!! 200';
}
elseif($salary >= 150000) {  
    echo 'yay... 150';
} 
else {
    echo ':( less';
}


echo '<br>';
echo '<br>';

// echo date function
echo date('Y');

echo '<br>';

echo date('h:i a');

echo '<h2>reset time zone</h2>';
date_default_timezone_set('America/Los_Angeles');

echo 'the real time is... ' .date('h:i a');

echo '<br>';
echo '<br>';


// if it is morning, say "good morning"
echo date('H:i:s a');       // cap H is mil time

echo '<br>';

$correct_time = date('H:i:sa');

if($correct_time < 10) {
    echo 'good morning!';
}
elseif($correct_time < 18) {
    echo 'good afternoon';
}
else {
    echo 'good evening';
}


/*
if the name input field is empty, do something
else, if it's not empty, then we are happy

if the email input field is empty, msg to user to fill out the field

in php we have vars, arrays, GLOBAL vars -- $_POST

$_POST['name'], $_POST['email'], $_POST['wines']... etc

if( empty($_POST['name']) ) {
    echo 'please fill out your name';

    OR

    $name_err = 'please fill out your name';
}
else {
    $name = $_POST['name'];     // if not empty, taking post input and assigning it to var name
}
*/


