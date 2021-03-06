<?php
// people.php


include('config.php');  // connect to the db
include('includes/header.php');

?>

<main>

<?php


$sql = 'select * from People';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die( myerror(__FILE__, __LINE__, mysqli_connect_error()) );
    //  extract the data here

$result = mysqli_query($iConn, $sql) or die( myerror(__FILE__, __LINE__, mysqli_error($iConn)) );


// do we have more than 0 rows?
if( mysqli_num_rows($result) > 0 ) {  // show the records

    while( $row = mysqli_fetch_assoc($result) ) {  // this array displays contents of row

        $gender = '';
        if($row['Gender'] === 'm') {
            $gender = 'His';
        }
        if($row['Gender'] === 'f') {
            $gender = 'Her';
        }

        echo '<ul>';  // use similar href as daily switch
        echo '<li class="bold">For more information on <a href="people-view.php?id='.$row['PeopleID'].'">'.$row['FirstName'].'</a></li>';
        echo '<li>'.$row['FirstName'].' '.$row['LastName'].'</li>';
        echo '<li>'.$gender.' Occupation: '.$row['Occupation'].'</li>';
        echo '</ul>';
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