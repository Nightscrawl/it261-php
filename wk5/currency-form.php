<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Currency Form</title>
        <meta name="author" content="K. Abell" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />

        <style>
            form {
                width: 350px;
                margin: 20px auto;
            }

            input {
                margin: 5px 0;
            }

            input[type=text], input[type=email] {
                width: 100%;
            }

            fieldset {
                padding: 10px;
                padding-right: 15px;
                color: #666;
            }

            label {
                display: block;
                margin-bottom: 10px;
            }

            li {
                list-style-type: none;
                list-style-position: outside;
            }

            p, h2 {
                margin: 0 auto 10px;
                text-align: center;
            }
        </style>

    </head>
    
    <body>
    
        <form action="" method="POST">

            <fieldset>

                <label>
                    Name
                    <input type="text" name="name"><br />
                </label>

                <label>
                    Email
                    <input type="email" name="email"><br />
                </label>

                <label>
                    How much money do you have?
                    <input type="text" name="amount"><br />
                </label>

                <label>
                    Choose your currency
                    <ul>
                        <li><input type="radio" name="currency" value="0.013"> Rubles</li>
                        <li><input type="radio" name="currency" value="0.76"> Canadian</li>
                        <li><input type="radio" name="currency" value="1.28"> Pounds</li>
                        <li><input type="radio" name="currency" value="1.18"> Euros</li>
                        <li><input type="radio" name="currency" value="0.0094"> Yen</li>
                    </ul>
                    
                </label>

                <input type="submit" value="Convert it!">

                <p><a href="">Reset form.</a></p>

            </fieldset>

        </form>


        <?php

            if($_SERVER['REQUEST_METHOD'] == 'POST') {  // IF server has a request method of post, do the following

                // delcare errors - if field is empty, do something
                // a lot of IF statements - if all IF statements are true, then yay

                if( empty($_POST['name']) ) { // always declare emptys at the top
                    echo '<p>Please fill out your name.</p>';
                }

                if( empty($_POST['email']) ) {
                    echo '<p>Please fill out your email.</p>';
                }

                if( empty($_POST['amount']) ) {
                    echo '<p>Show me the money!</p>';
                }

                if( empty($_POST['currency']) ) {
                    echo '<p>Please select one of the currencies.</p>';
                }

                elseif( isset(  // IF all the above errors work out, do the following
                    $_POST['name'],
                    $_POST['email'],
                    $_POST['amount'],
                    $_POST['currency']) && 
                    is_numeric($_POST['amount']) && 
                    is_numeric($_POST['currency']) ) {  // IF all of these are set, AND amt/curr, do the following

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $amount = $_POST['amount'];
                        $currency = $_POST['currency'];  // assign set vals to vars

                        $total = $amount * $currency;
                        $total_f = number_format($total, 2);

                        // echo '<p>$' .$total_f. '</p>';
                        // echo '<p>' .$name. '</p>';
                        // echo '<p>' .$email. '</p>';

                        echo '<h2>Thank you, ' .$name. ', for filling out our form.</h2>';
                        echo '<p>' .$name. ', you now have $' .$total_f. ' American dollars!</p>';
                        echo '<p>We will be getting back to you via your email: ' .$email. '.</p>';

                } // end elseif isset

                
                // else {
                //     echo '<p>Please fill out the form.</p>';
                // }


            } // end server

        ?>    
    
    </body>
    
</html>