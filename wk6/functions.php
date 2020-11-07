<?php
// functions


// hello function

function greeting() {
    echo 'hello world';
}

greeting();


echo '<br>';  // space
echo '<br>';  // space


// function using return
// return send result of function out into the world
// to use, must be assigned to a var, which is then called by something else (like echo)

function greeting2() {
    return 'I\'ve returned!';
}

$var = greeting2();
echo $var;


echo '<br>';  // space
echo '<br>';  // space


// function to find area of rec

function area($width, $height) {
    $calc = $width * $height;
    return $calc;
}

$ans = area(2, 6);
echo 'the area is ' .$ans. '';


echo '<br>';  // space
echo '<br>';  // space


$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function myNav($n) {
    $return = implode(', ', $n);
    return $return;
}

echo myNav($nav);


echo '<br>';  // space
echo '<br>';  // space


function popUpAd1() {
    echo '
        <h2>this is my popup ad1!</h2>
        <h2>this is my popup ad3!</h2>
        <h2>this is my popup ad5!</h2>
        <h2>this is my popup ad7!</h2>
    ';
}

popUpAd1();


echo '<br>';  // space
echo '<br>';  // space


function popUpAd2() {
    $var = '
        <h2>this is my popup ad2!</h2>
        <h2>this is my popup ad4!</h2>
        <h2>this is my popup ad6!</h2>
        <h2>this is my popup ad8!</h2>
        <img src="../img/me-500.jpg" alt="" height="100" />
    ';

    return $var;
}

echo popUpAd2();



