<?php

define( 'THIS_PAGE', basename($_SERVER['PHP_SELF']) );  // the page that i'm on is the page that i'm on

switch(THIS_PAGE) {
    case 'index.php' :
        $title = 'Home page for our new website';
        $mainHeadline = 'Welcome to Our Home Page';
        $center = 'center';
        $body = 'home';
    break;

    case 'about.php' :
        $title = 'About page for our new website';
        $mainHeadline = 'Welcome to Our wonderful About Page';
        $center = 'center';
        $body = 'about inner';
    break;

    case 'daily.php' :
        $title = 'Daily page';
        $mainHeadline = 'Welcome to the Daily Page';
        $center = 'center';
        $body = 'daily inner';
    break;

    case 'customers.php' :
        $title = 'Our very important cutomers';
        $mainHeadline = 'Hello Customers, Good to See You!';
        $center = 'center';
        $body = 'customers inner';
    break;

    case 'contact.php' :
        $title = 'Contact us today';
        $mainHeadline = 'Welcome to Our Contact Page';
        $center = 'center';
        $body = 'contact inner';
    break;

    case 'gallery.php' :
        $title = 'Check out our gallery';
        $mainHeadline = '';
        $center = 'center';
        $body = 'gallery inner';
    break;

}  // end switch

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function makeLinks($n) {

    $myReturn = '';

    foreach($n as $key => $value) {  // if this page is the __ page, and we're on the __ page, do this 
        if(THIS_PAGE == $key) {  // (add class="active")
            $myReturn .= '<li><a href="' .$key. '" class="active">' .$value. '</a></li>';
        } else {  // link without class="active"
            $myReturn .= '<li><a href="' .$key. '">' .$value. '</a></li>';
        }  // end else

    }  // end foreach

    return $myReturn;

}  // end function makeLinks
