<?php
// our first form: form elements - form, label, input
// if( isset($_GET['today']) )
// if( isset($_POST['name']) )


if( isset(
    $_POST['name'],
    $_POST['email']) 
    ) {       // if name has been set (usr input)
        $name = $_POST['name'];         // apply the input name to the $name var
        $email = $_POST['email'];
        echo ''.$name.' has filled out the form.';
        echo '<br />';
        echo 'Their email is '.$email.'';
} // if someone pills out the name, post name is assignmed to $name
else {      // if name is not set, show the form
    echo '

    <form action="" method="POST">
        <label>
            Name
            <input type="text" name="name"> <br />
        </label>

        <label>
            Email
            <input type="email" name="email"> <br />
        </label>

        <input type="submit" value="Submit">
    </form>
    
    
    
    
    
    
    
    
    
    
    
    
    ';
}

// by leaving action empty, the form reads php on the page




