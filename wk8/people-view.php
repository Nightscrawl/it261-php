<?php
// people view page


include('config.php');  // connect to the db

if( isset($_GET['id']) ) {

    $id = (int)$_GET['id'];

} else {
    header('Location:people.php');
}

$sql = 'select * from People where PeopleID = '.$id.'';


// connect to the db
$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die( myerror(__FILE__, __LINE__, mysqli_connect_error()) );
    //  extract the data here

$result = mysqli_query($iConn, $sql) or die( myerror(__FILE__, __LINE__, mysqli_error($iConn)) );


// do we have more than 0 rows?
if( mysqli_num_rows($result) > 0 ) {

    while( $row = mysqli_fetch_assoc($result) ) {

        $firstName = stripslashes($row['FirstName']);
        $lastName = stripslashes($row['LastName']);
        $occupation = stripslashes($row['Occupation']);
        $email = stripslashes($row['Email']);
        $birthDate = stripslashes($row['BirthDate']);
        $description = stripslashes($row['Description']);

        $feedback = '';

    }

} else {
    $feedback = 'Sorry, no candidates. They\'re partying.';
}

include('includes/header.php');

?>


<main>

    <h2>Welcome to <?php echo $firstName; ?>'s Page</h2>

    <?php 
        if($feedback == '') {
            echo '<ul>';
            echo '<li><b>First Name: </b>'.$firstName.'</li>';
            echo '<li><b>Last Name: </b>'.$lastName.'</li>';
            echo '<li><b>Occupation: </b>'.$occupation.'</li>';
            echo '<li><b>Email: </b>'.$email.'</li>';
            echo '<li><b>Birth Date: </b>'.$birthDate.'</li>';
            echo '</ul>';
            echo '<p>'.$description.'</p>';
            echo '<br />';
            echo '<p><a href="people.php">Go back to the people page!</a></p>';
        } else {
            echo $feedback;            
        }
    ?>



</main>

<aside>

    <?php 

        if($feedback == '') {

            echo '<img src="uploads/people'.$id.'.jpg" alt="'.$firstName.' '.$lastName.'" />';

        } else {
            echo $feedback;
            // echo '<p><a href="people.php">Go back to the people page!</a></p>';
        } 


        @mysqli_free_result($result);  // release web server
        @mysqli_close($iConn);  // close connection
    
    ?>

</aside>

<?php include('includes/footer.php');



