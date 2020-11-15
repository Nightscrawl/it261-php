<?php
// substr and str_replace


$statement = 'The presedential election is around the corner.';
echo $statement;

echo '<br />';
echo substr($statement, 0);  // index starting position; if second param is empty, rest of string is displayed

echo '<br />';
echo substr($statement, 0, 3);  // index starting position + number of characters to display -- "the"

echo '<br />';
echo substr($statement, 4, 12);  // start at index 4, display 12 chars -- "presedential"

echo '<br />';
echo substr($statement, -1);  // works backward thru the string, as if a circle -- "."

echo '<br />';
echo substr($statement, -7);  // works backward thru the string and still counts forward to show the rest -- "corner."

echo '<br />';
echo substr($statement, -11, 3);  // backward thru the string, then #spaces forward -- "the"

echo '<br />';
echo '<br />';

$statement2 = 'This election will be the most important election in my lifetime!';
echo $statement2;

echo '<br />';
echo str_replace('my', 'our', $statement2);  // targeted string, replacement string, source

echo '<br />';
echo str_replace('!', ', no kidding!', $statement2);  // also does single chars