<?php
// isset, $_GET global var, and switch


date_default_timezone_set('America/Los_Angeles');


// $var1 = 'test';

// if( isset($var1) ) {
//     print_r( isset($var1) );
// }
// else {
//     echo 'it has not been set';
// }


// is today set? if today is set, yay
// else, the date function will be assigned to today
    // if it's not the set date, display today's date

if( isset($_GET['today']) ){
    $today = $_GET['today'];
}
else {
    $today = date('l');
}

// echo date('l');      // ***** USE LOWERCASE L *****

switch($today) {

    case 'Monday' :
        $coffee = 'Monday is Americano day.';
        $pic = 'am.jpg';
        $alt = 'americano coffee';
        $content = 'With a similar flavor to black coffee, the americano consists of an espresso shot diluted in hot water. Pro tip: if you’re making your own, pour the espresso first, then add the hot water.';
    break;

    case 'Tuesday' :
        $coffee = 'Tuesday is Espresso day.';
        $pic = 'esp.jpg';
        $alt = 'espresso coffee';
        $content = 'An espresso shot can be served solo or used as the foundation of most coffee drinks, like lattes and macchiatos.';
    break;

    case 'Wednesday' :
        $coffee = 'Wednesday is Doppio day.';
        $pic = 'dop.jpg';
        $alt = 'doppio coffee';
        $content = 'A double shot of espresso, the doppio is perfect for putting extra pep in your step.';
    break;

    case 'Thursday' :
        $coffee = 'Thursday is Macchiato day.';
        $pic = 'macc.jpg';
        $alt = 'Macchiato';
        $content = 'The macchiato is another espresso-based drink that has a small amount of foam on top. It’s the happy medium between a cappuccino and a doppio.';
    break;

    case 'Friday' :         // use colon for case params
        $coffee = 'Friday is Mocha day.';
        $pic = 'mocha.jpg';
        $alt = 'mocha coffee';
        $content = 'For all you chocolate lovers out there, you’ll fall in love with a mocha (or maybe you already have). The mocha is a chocolate espresso drink with steamed milk and foam.';
    break;

    case 'Saturday' :
        $coffee = 'Saturday is Café au Lait day.';
        $pic = 'cafeaulait.jpg';
        $alt = 'café au lait';
        $content = 'Café au lait is perfect for the coffee minimalist who wants a bit more flavor. Just add a splash of warm milk to your coffee and you’re all set!';
    break;

    case 'Sunday' :
        $coffee = 'Sunday is Irish day.';
        $pic = 'irish.jpg';
        $alt = 'Irish coffee';
        $content = 'Irish coffee consists of black coffee, whiskey and sugar, topped with whipped cream.';
    break;
}


?>


<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>switch</title>
        <meta name="author" content="K. Abell" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />
        <!-- <link href="css/style.css" rel="stylesheet" /> -->
        <style>
            body {
                background-color: #889790;
                color: black;
            }

        .coffee {
            width: 66%;
            max-width: 1280px;
            margin: 0 auto;
        }

        </style>

    </head>
    
    <body>

        <div class="coffee">

            <h1><?php echo $coffee; ?></h1>

            <p>Click to see all of our daily specials.</p>

            <ul>
                <li><a href="switch.php?today=Monday">Monday</a></li>
                <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
                <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
                <li><a href="switch.php?today=Thursday">Thursday</a></li>
                <li><a href="switch.php?today=Friday">Friday</a></li>
                <li><a href="switch.php?today=Saturday">Saturday</a></li>
                <li><a href="switch.php?today=Sunday">Sunday</a></li>
            </ul>

            <img src="img/<?php echo $pic; ?>" alt="<?php echo $alt; ?>" />

            <p><?php echo $content; ?></p>
            <!-- description from: https://www.tasteofhome.com/article/types-of-coffee/ -->

        </div>

    
    </body>
    
</html>


