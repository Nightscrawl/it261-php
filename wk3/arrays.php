<?php
// working with arrays, eventually creating a nav with an array

?>

<!-- <ul>
    <li><a href="../">Back to Portal</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Daily</a></li>
    <li><a href="#">Customers</a></li>                        
    <li><a href="#">Gallery</a></li>
    <li><a href="#">Contact</a></li>
</ul> -->

<?php

$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['gallery.php'] = 'Gallery';
$nav['contact.php'] = 'Contact';
//    $key            $value

// OR

$nav = array(
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'customers.php' => 'Customers',
    'gallery.php' => 'Gallery',
    'contact.php' => 'Contact'
);

?>


<ul>

    <?php

        // to display the info for nav array, run for each loop
        foreach($nav as $key => $value) {

            // echo 'this is my '.$value.' page and the name of the php page is '.$key.' <br />';
            echo '<li><a href="'.$key.'">'.$value.'</a></li>';

        }

    ?>

</ul>

