<?php
// da-followers.php


include('config.php');  // connect to the db
include('includes/header.php');

?>

<div class="wrapper">

<main>

    <h2><?php echo $mainHeadline; ?></h2>

<?php


$sql = 'SELECT * FROM DA_Followers';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die( myerror(__FILE__, __LINE__, mysqli_connect_error()) );
    //  extract the data here

$result = mysqli_query($iConn, $sql) or die( myerror(__FILE__, __LINE__, mysqli_error($iConn)) );


// do we have more than 0 rows?
if( mysqli_num_rows($result) > 0 ) {  // show the records

    while( $row = mysqli_fetch_assoc($result) ) {  // this array displays contents of row

        $color = '';
        if($row['FollowerClass'] === 'mage') {
            $color = 'mage';
        }
        if($row['FollowerClass'] === 'rogue') {
            $color = 'rogue';
        }
        if($row['FollowerClass'] === 'warrior') {
            $color = 'warrior';
        }

        echo '<ul>';  // use similar href as daily switch
        echo '<li class="bold">For more information on <a href="da-followers-view.php?id='.$row['FollowerID'].'">'.$row['FollowerName'].'</a></li>';
        echo '<li class="'.$color.'">' .$row['FollowerClass']. '</li>';
        echo '<li>' .$row['FollowerSpec']. '</li>';
        echo '<li>' .$row['FollowerGender']. '</li>';
        echo '</ul>';
        echo '<br />';
    }  // close while

} else {  // what if not candidates?

    echo 'Nobody home!';

}  // close if else




@mysqli_free_result($result);  // release web server
@mysqli_close($iConn);  // close connection

?>

</main>

<aside>
    <h3>this is my aside</h3>
</aside>

<?php

include('includes/footer.php');