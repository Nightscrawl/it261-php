<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Calculator</title>
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
            }

            label {
                display: block;
                margin-bottom: 20px;
            }

            input, select, ul {
                margin: 5px 0;
            }

            select {
                display: block;
            }

            li {
                list-style-type: none;
                list-style-position: outside;
            }

            .title {
                text-align: center;
            }

            .button {
                padding: 2px 8px;
            }

            .button a {
                color: black;
                text-decoration: none;
            }

            p, h2 {
                margin: 0 auto 10px;
                text-align: center;
            }

        </style>

    </head>
    
    <body>

        <h1 class="title">Trip Calculator</h1>
    
        <form action="" method="POST">

            <fieldset>

                <label>
                    How many miles will you be driving? 
                    <input type="text" name="miles">
                </label>

                <label>
                    Price per Gallon
                    <ul>
                        <li><input type="radio" name="price" value="3"> $3.00</li>
                        <li><input type="radio" name="price" value="3.5"> $3.50</li>
                        <li><input type="radio" name="price" value="4"> $4.00</li>
                    </ul>
                    
                </label>

                <label>
                    Fuel Efficiency
                    <select name="efficiency">
                        <option value="NULL">Select one</option>
                        <option value="10">Terrible at 10</option>
                        <option value="20">Better at 20</option>
                        <option value="30">Okay at 30</option>
                        <option value="40">Great at 40</option>
                    </select>
                </label>

                <input class="button" type="submit" value="Calculate"> 

                <button class="button"><a href="">Reset</a></button>

            </fieldset>

        </form>


        <?php

            if($_SERVER['REQUEST_METHOD'] == 'POST') {

                // if( empty($_POST['miles']) ) {
                //     echo '<p>Please fill out the miles to drive.</p>';
                // }

                // if( empty($_POST['price']) ) {
                //     echo '<p>Please select the price of gas.</p>';
                // }

                // if( empty($_POST['efficiency']) ) {
                //     echo '<p>Please select your fuel efficiency.</p>';
                // }

                if( isset(
                    $_POST['miles'],
                    $_POST['price'],
                    $_POST['efficiency']) && 
                    is_numeric($_POST['miles']) ) {

                        $miles = $_POST['miles'];
                        $price = $_POST['price'];
                        $efficiency = $_POST['efficiency'];

                        $total = ($miles / $efficiency) * $price;
                        $total_f = number_format($total, 2);

                        echo '<p>You have driven ' .$miles. '.</p>';
                        echo '<p>Your vehicle has an efficiency rating of ' .$efficiency. ' miles per gallon.</p>';
                        echo '<p>Your total cost for gas will be $' .$total_f. '.</p>';

                } // end elseif isset
                
                else {
                    echo '<h2>Error!</h2>';
                    echo '<p>Please enter a valid distance, price per gallon, and select a fuel efficiency.</p>';
                }

            } // end server

        ?>    
    
    </body>
    
</html>