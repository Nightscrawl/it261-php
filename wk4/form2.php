<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>form2</title>
        <meta name="author" content="K. Abell" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />
        <!-- <link href="css/style.css" rel="stylesheet" /> -->
        <style>
            form {
                width: 350px;
                border: 1px solid green;
                margin: 20px auto;
                padding: 10px;
            }

            label, input[type=submit] {
                display: block;
                margin-bottom: 10px;
            }

            h2 {
                color: red;
            }

            h2, .center {
                text-align: center;
            }

            ul {
                list-style-type: none;
                list-style-position: outside;
            }
        </style>

    </head>
    
    <body>
    
        <form action="" method="POST">
            <label>
                Name<br />
                <input type="text" name="name">
            </label>

            <label>
                Email<br />
                <input type="email" name="email">
            </label>

            <label>
                Comments<br />
                <textarea name="comments"></textarea>
            </label>

            <input type="submit" value="Submit">

            <p><a href="">Reset the form.</a></p>

        </form>

        <?php

            if( isset(
                $_POST['name'],
                $_POST['email'],
                $_POST['comments']) 
                ) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $comments = $_POST['comments'];

                    if( empty($name && $email && $comments) ) {
                        echo '<h2>Error.</h2>';
                        echo '<p class="center">Please fill out all the fields.</p>';
                    } else {
                        //echo $name;
                        //echo '<br />';
                        //echo $email;
                        //echo '<br />';
                        //echo $comments;

                        echo '<ul class="center">';
                        echo '<li>'.$name.'</li>';
                        echo '<li>'.$email.'</li>';
                        echo '<li>'.$comments.'</li>';
                        echo '</ul>';

                    }


                }  // if issset


        ?>
    
    
    
    
    
    
    </body>
    
</html>




