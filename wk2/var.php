<?php
// beginning of our php - the world of wariables


// var is container for content
// be consistent with naming conventions

$firstName = 'Kira';
// kira is *assigned* to firstName
// end of php statement has ;

$lastName = 'Abell';

echo $firstName;
// echo is like print

// echo '<h2> $firstName </h2>';
echo '<h2> ' .$firstName. ' </h2>';
// concatenate with periods
// '.$variableName.'
// if nested in single quotes

echo "<h1> $firstName </h1>";
// not needed with double quotes

echo $firstName . $lastName;
echo "<br />";
echo $firstName. ' ' .$lastName;
// concatenate with periods

echo "<br />";
echo "<br />";


// ARRAY

// $firstName[] = 'kira';
// $firstName[] = 'andrew';
// $firstName[] = 'judah';
// $firstName[] = 'kai';

$firstName = ['kira', 'andrew', 'judah', 'kai'];
// indexed array

// $firstName = array('kira', 'andrew', 'judah', 'kai');

print_r($firstName);

echo "<br />";

echo $firstName[1];

echo "<br />";

// $show = array('name' => 'frasier', 'actor' => 'kelsey grammar', 'genre' => 'comedy');

$show = array(
    'title' => 'frasier',
    'actor' => 'kelsey grammar',
    'genre' => 'comedy');
// associative array -- key => value

print_r($show);

echo "<br />";

$showName = 'frasier';
$showActor = 'kelsey grammar';
$showGenre = 'comedy';

echo '<p>my favorite show is '.$showName.', starring '.$showActor.', which is a '.$showGenre.'.</p>';

echo "<p>my favorite show is $showName, starring $showActor, which is a $showGenre.</p>";

echo "<br />";
echo "<br />";


// CONCACTENATION AND COMBINING

$begAlpha = 'abc';
$begAlpha2 = 'def';

echo $begAlpha . $begAlpha2;

echo "<br />";

$begAlpha = 'abc';
$begAlpha = 'def';

echo $begAlpha;

echo "<br />";

$begAlpha = 'abc';
$begAlpha .= 'def';
// passing new value to the var and joining it to previous value

echo $begAlpha;

echo "<br />";
echo "<br />";


// NUMBERS

$x = 5;
echo $x;

echo "<br />";

$x *= 5;    // x = x * 5
echo $x;

$y = 100;
$y *= .095;

echo "<br />";

// echo $y;

$yNum = number_format($y, 2);
// spec decimal places with function

echo $yNum;
echo "<br />";

// echo "my tax rate is $yNum";
echo 'my tax rate is '.$yNum.'.';

echo "<br />";

$a = 20;
$a += 30;   // a = a + 30
echo $a;

echo "<br />";



