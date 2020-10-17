<?php

date_default_timezone_set('America/Los_Angeles');

/*
logic behind logic and body class var, then the title will be this
if we are on the daily page, title is this, etc...
how do we know what page? w basename function

define a constant and use basename function
*/

define( 'THIS_PAGE', basename($_SERVER['PHP_SELF']) );
// making a constant called 'this_page'
// when on this page, w basename server-php_self, it returns this_page




if( isset($_GET['today']) ){
    $today = $_GET['today'];
}
else {
    $today = date('l');
}

switch($today) {

    case 'Monday' :
        $coffee = 'Monday is Americano Day';
        $pic = 'am.jpg';
        $alt = 'americano coffee';
        $content = 'With a similar flavor to black coffee, the americano consists of an espresso shot diluted in hot water. Pro tip: if you’re making your own, pour the espresso first, then add the hot water. '.$today.' ';
        $accent = 'mon';
    break;

    case 'Tuesday' :
        $coffee = 'Tuesday is Espresso Day';
        $pic = 'esp.jpg';
        $alt = 'espresso coffee';
        $content = 'An espresso shot can be served solo or used as the foundation of most coffee drinks, like lattes and macchiatos. '.$today.' ';
        $accent = 'tue';
    break;

    case 'Wednesday' :
        $coffee = 'Wednesday is Doppio Day';
        $pic = 'dop.jpg';
        $alt = 'doppio coffee';
        $content = 'A double shot of espresso, the doppio is perfect for putting extra pep in your step. '.$today.' ';
        $accent = 'wed';
    break;

    case 'Thursday' :
        $coffee = 'Thursday is Macchiato Day';
        $pic = 'macc.jpg';
        $alt = 'Macchiato';
        $content = 'The macchiato is another espresso-based drink that has a small amount of foam on top. It’s the happy medium between a cappuccino and a doppio. '.$today.' ';
        $accent = 'thur';
    break;

    case 'Friday' :         // use colon for case params
        $coffee = 'Friday is Mocha Day';
        $pic = 'mocha.jpg';
        $alt = 'mocha coffee';
        $content = 'For all you chocolate lovers out there, you’ll fall in love with a mocha (or maybe you already have). The mocha is a chocolate espresso drink with steamed milk and foam. '.$today.' ';
        $accent = 'fri';
    break;

    case 'Saturday' :
        $coffee = 'Saturday is Café au Lait Day';
        $pic = 'cafeaulait.jpg';
        $alt = 'café au lait';
        $content = 'Café au lait is perfect for the coffee minimalist who wants a bit more flavor. Just add a splash of warm milk to your coffee and you’re all set! '.$today.' ';
        $accent = 'sat';
    break;

    case 'Sunday' :
        $coffee = 'Sunday is Irish Day';
        $pic = 'irish.jpg';
        $alt = 'Irish coffee';
        $content = 'Irish coffee consists of black coffee, whiskey and sugar, topped with whipped cream. '.$today.' ';
        $accent = 'sun';
    break;
}

switch(THIS_PAGE) {

    case 'index.php' :
        $title = 'IT261 | Site 1';
        $body_class = '';
        $accent = '';
    break;

    case 'daily.php' :
        $title = 'IT261 | Daily Coffee';
        $body_class = 'daily';
    break;

}

?>


<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="author" content="K. Abell" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />
        <link href="css/reset.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    
    <body class="<?php echo $body_class; ?>">
    
        <div class="container <?php echo $accent; ?>">

            <header>

                <div class="inner">
                    <h1 class="title"><a href="index.php">IT261 | Site 1</a></h1>
                </div>                

            </header>

            <nav>

                <div class="inner">

                    <ul>
                        <li><a href="../">Back to Portal</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="daily.php">Daily</a></li>
                        <li><a href="#">Customers</a></li>                        
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                </div>

            </nav>