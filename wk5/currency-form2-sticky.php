<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Sticky Currency Form 2</title>
        <meta name="author" content="K. Abell" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />

        <style>

            form {
                width: 350px;
                margin: 20px auto;
            }

            input, select {
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

            .box {
                width: 600px;
                margin: 20px auto;
                background-color: beige;
                padding: 20px;
                border: 1px solid green;
            }

        </style>

    </head>
    
    <body>
    
        <form action="" method="POST">

            <fieldset>

                <label>
                    Name
                    <input type="text" name="name" value="<?php 
                        if( isset($_POST['name']) ) echo $_POST['name']; ?>"><br />  <!-- if isset post name is set, then show the post name -->
                </label>

                <label>
                    Email
                    <input type="email" name="email" value="<?php 
                        if( isset($_POST['email']) ) echo $_POST['email']; ?>"><br />
                </label>

                <label>
                    Choose your banking institution
                    <select name="bank">
                        <option value="NULL" <?php 
                            if( isset($_POST['bank']) && $_POST == 'NULL' ) {
                                echo 'selected = "unselected"';
                            } ?>>Select one
                        </option>
                        <option value="Bank of America" <?php 
                            if( isset($_POST['bank']) && $_POST['bank'] == 'Bank of America' ) {
                                echo 'selected = "selected"';
                            } ?>>Bank of America
                        </option>
                        <option value="Chase Bank" <?php 
                            if( isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank' ) {
                                echo 'selected = "selected"';
                            } ?>>Chase Bank
                        </option>
                        <option value="Boeing Credit Union" <?php 
                            if( isset($_POST['bank']) && $_POST['bank'] == 'Boeing Credit Union' ) {
                                echo 'selected = "selected"';
                            } ?>>Boeing Credit Union
                        </option>
                        <option value="Wells Fargo" <?php 
                            if( isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo' ) {
                                echo 'selected = "selected"';
                            } ?>>Wells Fargo
                        </option>
                        <option value="The Mattress" <?php 
                            if( isset($_POST['bank']) && $_POST['bank'] == 'The Mattress' ) {
                                echo 'selected = "selected"';
                            } ?>>The Mattress
                        </option>
                    </select>
                </label>

                <label>
                    How much money do you have?
                    <input type="text" name="amount" value="<?php 
                        if( isset($_POST['amount']) ) echo $_POST['amount']; ?>"><br />
                </label>

                <label>
                    Choose your currency
                    <ul>  <!-- if post currency was set
                                is the post currency equal to the value? -->
                        <li><input type="radio" name="currency" value="0.013"
                            <?php if( isset($_POST['currency']) && $_POST['currency'] == '0.013' ) echo 'checked="checked"'; ?>> Rubles</li>
                        <li><input type="radio" name="currency" value="0.76"
                            <?php if( isset($_POST['currency']) && $_POST['currency'] == '0.76' ) echo 'checked="checked"'; ?>> Canadian</li>
                        <li><input type="radio" name="currency" value="1.28"
                            <?php if( isset($_POST['currency']) && $_POST['currency'] == '1.28' ) echo 'checked="checked"'; ?>> Pounds</li>
                        <li><input type="radio" name="currency" value="1.18"
                            <?php if( isset($_POST['currency']) && $_POST['currency'] == '1.18' ) echo 'checked="checked"'; ?>> Euros</li>
                        <li><input type="radio" name="currency" value="0.0094"
                            <?php if( isset($_POST['currency']) && $_POST['currency'] == '0.0094' ) echo 'checked="checked"'; ?>> Yen</li>
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

                if( $_POST['bank'] == 'NULL' ) {
                    echo '<p>Please choose your banking institution.</p>';
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
                    $_POST['bank'],
                    $_POST['amount'],
                    $_POST['currency']) && 
                    is_numeric($_POST['amount']) && 
                    is_numeric($_POST['currency']) ) {  // IF all of these are set, AND amt/curr, do the following

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $bank = $_POST['bank'];
                        $amount = $_POST['amount'];
                        $currency = $_POST['currency'];  // assign set vals to vars

                        $total = $amount * $currency;
                        $total_f = number_format($total, 2);

        ?>

        <div class="box">

        <?php

                        echo '<h2>Thank you, ' .$name. ', for filling out our form. Your money will be wired to ' .$bank. ' within 24 hours.</h2>';
                        echo '<p>' .$name. ', you now have $' .$total_f. ' American dollars!</p>';
                        echo '<p>We will be getting back to you via your email: ' .$email. '.</p>';

                } // end elseif isset             


            } // end server

        ?>        

        </div>

   
    
    </body>
    
</html>