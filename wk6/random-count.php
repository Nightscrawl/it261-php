<?php
// random and count functions


// $dice = rand(1, 6);

// echo $dice;


// $dice1 = rand(1, 6);
// $dice2 = rand(1, 6);

// echo $dice1;
// echo '<br>';  // space
// echo $dice2;


$dice1 = rand(1, 6);  // 1, 6 and all  numbers in between
$dice2 = rand(1, 6);

if($dice1 == $dice2) {
    echo 'you\'ve got a double!';
} else {
    echo 'you don\'t!';
}

echo '<br>';  // space
echo '<br>';  // space


// $photos = array('photo1', 'photo2', 'photo3', 'photo4', 'photo5');

// $photos = ['photo1', 'photo2', 'photo3', 'photo4', 'photo5'];

$photos[] = 'photo1';
$photos[] = 'photo2';
$photos[] = 'photo3';
$photos[] = 'photo4';
$photos[] = 'photo5';

$i = rand( 0, count($photos)-1 );
$selectedImages = 'website/img/'.$photos[$i].'.jpg';
echo '<img src="'.$selectedImages.'" />';


