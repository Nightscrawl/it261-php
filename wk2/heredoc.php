<?php 
// this is my heredoc syntax


$book = 'Handmaid\'s Tale';
$author = 'Margaret Atwood';
$char = 'June';
$actor = 'Elizabeth Moss';

$content = <<<hand
<p>My favorite book is $book, written by $author, which is presently a miniseries on HULU. HULU's viewing audience is extremely excited about the miniseries and looks forward to the fifth season of the award winning "Handmaid's Tale." The $actor's rendition is right on!</p>

<p>Again, the content will work because all of my content is displayed in orange, and my variables are displayed in blue!!!</p>
hand;

// html tags also usable

echo $content;