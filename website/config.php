<?php

ob_start();  // prevents header errors before reading the whole page

define('DEBUG', 'TRUE');  // shows errors

include('creds.php');

define( 'THIS_PAGE', basename($_SERVER['PHP_SELF']) );  // the page that i'm on is the page that i'm on


// GALLERY ----------

$people['Donald_Trump'] = 'trump President from NY';  // lowercase 'trump' is use to manipulate substr/str_replace for the image
$people['Joe_Biden'] = 'biden Vice Presedent from PA';
$people['Hillary_Clinton'] = 'clint Secretary from NY';
$people['Bernie_Sanders'] = 'sande Senator from VT';
$people['Elizabeth_Warren'] = 'warre Senator from MA';
$people['Kamala_Harris'] = 'harri Senator from CA';
$people['Cory_Booker'] = 'booke Senator from NJ';
$people['Andrew_Yang'] = 'ayang Entrepreneur from NY';
$people['Pete_Buttigieg'] = 'butti Mayor from IN';
$people['Amy_Klobuchar'] = 'klobu Senator from MN';
$people['Julian_Castro'] = 'castr Housing/Urban from TX';



$gallery_albums['Hast du mich vermisst?'] = 'asp 2000';
$gallery_albums[':Duett'] = 'asp 2001';
$gallery_albums['Weltunter'] = 'asp 2002';
$gallery_albums['Aus der Tiefe'] = 'asp 2003';
$gallery_albums['Requiembryo'] = 'asp 2004';
$gallery_albums['Zaubererbruder'] = 'asp 2005';
$gallery_albums['fremd'] = 'asp 2006';
$gallery_albums['Maskenhaft – Ein Versinken in elf Bildern'] = 'asp 2007';
$gallery_albums['Verfallen (Zweiteiler), Folge 1: Astoria'] = 'asp 2008';
$gallery_albums['Verfallen (Zweiteiler), Folge 2: Fassaden'] = 'asp 2009';
$gallery_albums['Das GeistErfahrer Langspielalbum'] = 'asp 2010';
$gallery_albums['zutiefst ASP'] = 'asp 2011';
$gallery_albums['Kosmonautilus'] = 'asp 2012';





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

    case 'da-followers.php' :
        $title = 'Dragon Age Followers';
        $mainHeadline = 'Dragon Age Followers';
        $center = 'center';
        $body = 'followers inner';
    break;

    // case 'da-followers-view.php?id='.$followerID.'';
    //     $title = 'Dragon Age Followers - '.$followerName.'';
    //     $mainHeadline = 'Dragon Age Followers';
    //     $center = 'center';
    //     $body = 'followers inner';
    // break;

    case 'contact.php' :
        $title = 'Contact us today';
        $mainHeadline = 'Welcome to Our Contact Page';
        // $center = 'center';
        $body = 'contact inner';
    break;

    case 'thx.php' :
        $title = 'Thank you!';
        $mainHeadline = 'Thank you!';
        // $center = 'center';
        $body = 'contact inner';
    break;

    case 'gallery.php' :
        $title = 'Check out our gallery';
        $mainHeadline = 'Welcome to the Album Page';
        // $center = 'center';
        $body = 'gallery inner';
    break;

}  // end switch

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['da-followers.php'] = 'Dragon Age Followers';
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


$photos[] = 'photo1';
$photos[] = 'photo2';
$photos[] = 'photo3';
$photos[] = 'photo4';
$photos[] = 'photo5';

function randImages($p) {
    $i = rand( 0, count($p)-1 );
    $selectedImages = 'img/'.$p[$i].'.jpg';
    $alt = ''.$p[$i].'';
    echo '<img src="'.$selectedImages.'" alt="'.$alt.'" />';
}


$candidates[] = 'trump';
$candidates[] = 'biden';
$candidates[] = 'clint';
$candidates[] = 'sande';
$candidates[] = 'warre';
$candidates[] = 'harri';
$candidates[] = 'booke';
$candidates[] = 'ayang';
$candidates[] = 'butti';
$candidates[] = 'klobu';
$candidates[] = 'castr';

function randImages2($c) {
    $i = rand( 0, count($c)-1 );
    $selectedImages = 'img/'.$c[$i].'.jpg';
    $alt = ''.$c[$i].'';
    echo '<img src="'.$selectedImages.'" alt="'.$alt.'" />';
}


$art[] = 'asp1';
$art[] = 'asp2';
$art[] = 'asp3';
$art[] = 'asp4';
$art[] = 'asp5';
$art[] = 'asp6';
$art[] = 'asp7';
$art[] = 'asp8';
$art[] = 'asp9';
$art[] = 'asp10';
$art[] = 'asp11';
$art[] = 'asp12';
$art[] = 'asp13';

function randImages3($a) {
    $i = rand( 0, count($a)-1 );
    $selectedImages = 'img/'.$a[$i].'.jpg';
    $alt = ''.$a[$i].'';
    echo '<img src="'.$selectedImages.'" alt="'.$alt.'" />';
}


// FORM

$firstName = '';
$lastName = '';
$email = '';
$tel = '';
$returnCust = '';
$albums = '';
$comments = '';
$privacy = '';
    // because code is moved, must now initialize vars

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$telErr = '';
$returnCustErr = '';
$albumsErr = '';
$commentsErr = '';
$privacyErr = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {  // IF server has a request method of post, do the following

    // IF name is empty, create var $nameErr and say, "please fill out your name" and assign to var
    // if NOT empty, $name = $_POST['name']

    // delcare errors - if field is empty, do something
    // a lot of IF statements - if all IF statements are true, then yay

    if( empty($_POST['firstName']) ) {  // always declare emptys at the top
        $firstNameErr = 'Please fill out your first name.';
    } else {
        $firstName = $_POST['firstName'];  // IF empty, display error, else assn the post name to var $name
    }

    if( empty($_POST['lastName']) ) {
        $lastNameErr = 'Please fill out your last name.';
    } else {
        $lastName = $_POST['lastName'];
    }

    if( empty($_POST['email']) ) {
        $emailErr = 'Please fill out your email.';
    } else {
        $email = $_POST['email'];
    }

    if( empty($_POST['returnCust']) ) {
        $returnCustErr = 'Please select one.';
    } else {
        $returnCust = $_POST['returnCust'];
    }

    if($returnCust == 'yes') {
        $yes = 'checked';
    } elseif($returnCust == 'no') {
        $no = 'checked';
    }

    if( empty($_POST['albums']) ) {
        $albumsErr = 'You forgot to select an album...';
    } else {
        $albums = $_POST['albums'];
    }

    if( empty($_POST['comments']) ) {
        $commentsErr = "Don't forget to leave a comment!";
    } else {
        $comments = $_POST['comments'];
    }

    if( empty($_POST['privacy']) ) {
        $privacyErr = 'Please agree to our privacy policy.';
    } else {
        $privacy = $_POST['privacy'];
    }


    if( empty($_POST['tel']) ) {  // if empty, type in your number
        $telErr = 'Please input your phone number.';
    } elseif( array_key_exists('tel', $_POST) ) {
        if( !preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']) ) {  // if not typing in xxx-xxx-xxx, display invalid format
            $telErr = 'Invalid format!';
        } else {
            $tel = $_POST['tel'];
        }
    }
    

    // if user checks the checkboxes, all of them, we want to know
    // implode the array

    function favAlbums() {
        $myReturn = '';

        if( !empty($_POST['albums']) ) {  // if it's not empty, take contents of array wines
            $myReturn = implode(', ', $_POST['albums']);
        }

        return $myReturn;

    } // end myWines



    if( isset(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['tel'],
        $_POST['returnCust'],
        $_POST['albums'],
        $_POST['comments'],
        $_POST['privacy']) ) {

            $to = 'kaynbell@gmail.com';
            $subject = 'test email on ' . date('m/d/y');
            $body = ''.$firstName. ' ' .$lastName. ' has filled out your form.' .PHP_EOL.'';
            $body .= 'Email: ' .$email. '' .PHP_EOL.'';
            $body .= 'Phone: ' .$tel. '' .PHP_EOL.'';
            $body .= 'Returning customer? ' .$returnCust. '' .PHP_EOL.'';
            $body .= 'Favorite album: ' .favAlbums(). '' .PHP_EOL.'';
            $body .= 'Why? ' .$comments. '' .PHP_EOL.'';

            $headers = array(
                'From' => 'no-reply@nightscrawl.net',  // obfuscate self mail
                'Reply-to' => ''.$email.''  // info to reply to sender
            );

            mail($to, $subject, $body, $headers);
                header('Location: thx.php');
                
        } // end isset

} // close server request method





// placed at the very bottom of the config file
function myerror($myFile, $myLine, $errorMsg) {
    if( defined('DEBUG') && DEBUG ) {
        echo 'Error in file: <b>' .$myFile. '</b> on line: <b>' .$myLine. '</b>';
        echo 'Error message: <b>' .$errorMsg. '</b>';
        die();
    } else {
        echo 'Houston, we have a problem!';
        die();
    }
}
