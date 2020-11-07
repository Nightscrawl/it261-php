<?php

$firstName = '';
$lastName = '';
$email = '';
// $phone = '';
$gender = '';
$wines = '';
$comments = '';
$privacy = '';
    // because code is moved, must now initialize vars

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
// $phoneErr = '';
$genderErr = '';
$winesErr = '';
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

    if( empty($_POST['gender']) ) {
        $genderErr = 'Please select your gender.';
    } else {
        $gender = $_POST['gender'];
    }

    if($gender == 'male') {
        $male = 'checked';
    } elseif($gender == 'female') {
        $female = 'checked';
    } elseif($gender == 'prefer not to say') {
        $xgender = 'checked';
    }

    if( empty($_POST['wines']) ) {
        $winesErr = 'Please pick a wine.';
    } else {
        $wines = $_POST['wines'];
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


    if( isset(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['wines'],
        $_POST['comments'],
        $_POST['privacy']) ) {

            $to = 'kira.abell@seattlecolleges.edu';
            $subject = 'test email on ' . date('m/d/y');
            $body = ''.$firstName. ' ' .$lastName. ' has filled out your form.' .PHP_EOL.'';
            $body .= 'Email: ' .$email. '' .PHP_EOL.'';
            $body .= 'Gender: ' .$gender. '' .PHP_EOL.'';
            $body .= 'Wines: ' .$wines. '' .PHP_EOL.'';
            $body .= 'Comments: ' .$comments. '' .PHP_EOL.'';

            $headers = array(
                'From' => 'no-reply@nightscrawl.net',  // obfuscate self mail
                'Reply-to' => ''.$email.''  // info to reply to sender
            );

            mail($to, $subject, $body, $headers);
                header('Location: thx.php');
                
        } // end isset

} // close server request method

?>


<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Emailable Form</title>
        <meta name="author" content="K. Abell" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />

        <style>

            form {
                width: 350px;
                margin: 20px auto;
            }

            fieldset {
                padding: 10px;
                padding-right: 15px;
                color: #666;
            }

            label {
                display: block;
                margin-bottom: 14px;
            }

            input, select, ul, textarea {
                margin: 4px 0;
            }

            input[type=text], input[type=email], textarea {
                width: 100%;
                height: 30px;
            }
            
            textarea {
                display: block;
                height: 120px;
            }

            li {
                list-style-type: none;
                list-style-position: outside;
                /* margin-left: 6px; */
                /* text-indent: 0; */
            }

            p, h2 {
                margin: 0 auto 10px;
                text-align: center;
            }

            .box {
                width: 600px;
                margin: 20px auto;
                background-color: beige;
                padding: 20px;
                border: 1px solid green;
            }

            span {
                display: block;
                color: red;
                font-style: italic;
            }

        </style>

    </head>
    
    <body>
    
        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ) ?>" method="POST">  <!-- the form action is pointing to the page we are on -->
            <!-- htmlspecialchars function makes page secure -->

            <fieldset>

                <label>
                    First Name
                    <input type="text" name="firstName" value="<?php 
                        if( isset($_POST['firstName']) ) echo htmlspecialchars( $_POST['firstName'] ); ?>"><br />  <!-- if isset post name is set, then show the post name -->
                    <span><?php echo $firstNameErr; ?></span>
                </label>

                <label>
                    Last Name
                    <input type="text" name="lastName" value="<?php 
                        if( isset($_POST['lastName']) ) echo htmlspecialchars( $_POST['lastName'] ); ?>"><br />
                    <span><?php echo $lastNameErr; ?></span>
                </label>

                <label>
                    Email
                    <input type="email" name="email" value="<?php 
                        if( isset($_POST['email']) ) echo htmlspecialchars( $_POST['email'] ); ?>"><br />
                    <span><?php echo $emailErr; ?></span>
                </label>

                <!-- <label>
                    Phone
                    <input type="text" name="phone" value="<?php 
                        if( isset($_POST['phone']) ) echo htmlspecialchars( $_POST['phone'] ); ?>"><br />
                    <span><?php echo $phoneErr; ?></span>
                </label> -->

                <label>
                    Gender
                    <ul>  <!-- if post gender was set
                                is the post gender equal to the value? -->
                        <li><input type="radio" name="gender" value="male"
                            <?php if( isset($_POST['gender']) && $_POST['gender'] == 'male' ) echo 'checked="checked"'; ?>> Male</li>

                        <li><input type="radio" name="gender" value="female"
                            <?php if( isset($_POST['gender']) && $_POST['gender'] == 'female' ) echo 'checked="checked"'; ?>> Female</li>

                        <li><input type="radio" name="gender" value="prefer not to say"
                            <?php if( isset($_POST['gender']) && $_POST['gender'] == 'prefer not to say' ) echo 'checked="checked"'; ?>> Prefer not to say</li>
                    </ul>
                    <span><?php echo $genderErr; ?></span>                    
                </label>

                <label>
                    Favorite Wines
                    <ul>
                        <li><input type="checkbox" name="wines[]" value="cabernet"
                            <?php if( isset($_POST['wines']) && $_POST['wines'] == 'cabernet' ) echo 'checked="checked"'; ?>> Cabernet</li>

                        <li><input type="checkbox" name="wines[]" value="merlot"
                            <?php if( isset($_POST['wines']) && $_POST['wines'] == 'merlot' ) echo 'checked="checked"'; ?>> Merlot</li>

                        <li><input type="checkbox" name="wines[]" value="syrah"
                            <?php if( isset($_POST['wines']) && $_POST['wines'] == 'syrah' ) echo 'checked="checked"'; ?>> Syrah</li>

                        <li><input type="checkbox" name="wines[]" value="malbec"
                            <?php if( isset($_POST['wines']) && $_POST['wines'] == 'malbec' ) echo 'checked="checked"'; ?>> Malbec</li>

                        <li><input type="checkbox" name="wines[]" value="pinot"
                            <?php if( isset($_POST['wines']) && $_POST['wines'] == 'pinot' ) echo 'checked="checked"'; ?>> Pinot Noir</li>

                        <li><input type="checkbox" name="wines[]" value="zinfandel"
                            <?php if( isset($_POST['wines']) && $_POST['wines'] == 'zinfandel' ) echo 'checked="checked"'; ?>> Zinfandel</li>
                    </ul>
                    <span><?php echo $winesErr; ?></span>                                        
                </label>

                <label>
                    Comments
                    <textarea name="comments"><?php if( isset($_POST['comments']) ) echo htmlspecialchars( $_POST['comments'] ); ?></textarea>
                    <span><?php echo $commentsErr; ?></span>
                </label>

                <label>
                    <input type="radio" name="privacy" value="<?php 
                            if( isset($_POST['privacy']) ) echo htmlspecialchars( $_POST['privacy'] ); ?>"> I agree to your privacy policy
                    <span><?php echo $privacyErr; ?></span>                    
                </label>

                <input type="submit" value="Send">

                <p><a href="">Reset form</a></p>

            </fieldset>

        </form> 
    
    </body>
    
</html>