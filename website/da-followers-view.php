<?php
// follower view page


include('config.php');  // connect to the db

if( isset($_GET['id']) ) {

    $id = (int)$_GET['id'];

} else {
    header('Location: followers.php');
}

$sql = 'SELECT * FROM DA_Followers WHERE FollowerID = '.$id.'';


// connect to the db
$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die( myerror(__FILE__, __LINE__, mysqli_connect_error()) );
    //  extract the data here

$result = mysqli_query($iConn, $sql) or die( myerror(__FILE__, __LINE__, mysqli_error($iConn)) );


// do we have more than 0 rows?
if( mysqli_num_rows($result) > 0 ) {

    while( $row = mysqli_fetch_assoc($result) ) {

        $followerID = stripslashes($row['FollowerID']);
        $followerName = stripslashes($row['FollowerName']);
        $followerClass = stripslashes($row['FollowerClass']);
        $followerSpec = stripslashes($row['FollowerSpec']);
        $followerGender = stripslashes($row['FollowerGender']);

        $feedback = '';

    }

} else {
    $feedback = 'Could not find the followers.';
}


include('includes/header.php');

?>


<div class="wrapper">

<main>

    <h2>Welcome to <?php echo $followerName; ?>'s Page</h2>

    <?php 
        if($feedback == '') {
            echo '<ul>';
            echo '<li><b>Name: </b>'.$followerName.'</li>';
            echo '<li><b>Class: </b>'.$followerClass.'</li>';
            echo '<li><b>Specialization: </b>'.$followerSpec.'</li>';
            echo '<li><b>Gender: </b>'.$followerGender.'</li>';
            echo '</ul>';
            echo '<p><a href="da-followers.php">Go back to the Followers page!</a></p>';
        } else {
            echo $feedback;            
        }
    ?>



</main>

<aside>

    <?php 

        if($feedback == '') {

            echo '<img src="img/follower'.$id.'.png" alt="'.$followerName.'" />';

        } else {
            echo $feedback;
            // echo '<p><a href="da-followers.php">Go back to the Followers page!</a></p>';
        } 


        @mysqli_free_result($result);  // release web server
        @mysqli_close($iConn);  // close connection
    
    ?>

</aside>

<?php include('includes/footer.php');



