<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Calculator - Days</title>
        <meta name="author" content="K. Abell" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />

        <style>

            * {
                box-sizing: border-box;
            }

            fieldset, .box {
                width: 500px;
                margin: 20px auto;
                padding: 20px;
                border: 1px solid #666;
            }

            fieldset {
                background-color: beige;
            }

            label {
                display: block;
                margin-bottom: 20px;
            }

            input, select, ul {
                margin: 5px 0;
            }

            input, select {
                display: block;
            }

            li {
                list-style-type: none;
                list-style-position: outside;
            }

            li input, input[type=submit] {
                display: inline;
            }

            .title {
                text-align: center;
            }

            .red {
                color: red;
            }

            .result {
                font-weight: bold;
            }

            .center {
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
            }

        </style>

    </head>
    
    <body>

        <h1 class="title">Trip Calculator - Days</h1>
    
        <form action="" method="POST">

            <fieldset>

                <label>
                    Your Name
                    <input type="text" name="name">
                </label>

                <label>
                    How many miles will you be driving? 
                    <input type="text" name="miles">
                </label>

                <label>
                    How many hours per day would you like to be driving? 
                    <input type="text" name="hours">
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
                    $_POST['name'],
                    $_POST['miles'],
                    $_POST['hours'],
                    $_POST['price'],
                    $_POST['efficiency']) && 
                    is_numeric($_POST['miles']) &&
                    is_numeric($_POST['hours']) ) {

                        $name = $_POST['name'];
                        $miles = $_POST['miles'];
                        $hours = $_POST['hours'];
                        $price = $_POST['price'];
                        $efficiency = $_POST['efficiency'];
                        $mph = 65;

                        $total = ($miles / $efficiency) * $price;
                        $total_f = number_format($total, 2);

                        $total_hours = ceil($miles / $mph);
                        $days = ceil($total_hours / $hours);

                        echo '<div class="box">';
                        echo '<h2 class="title">Results</h2>';
                        echo '<p><span class="result">' .$name. '</span>, you will be driving <span class="result">' .$miles. '</span> miles.</p>';
                        echo '<p>Your vehicle has an efficiency rating of <span class="result">' .$efficiency. '</span> miles per gallon.</p>';
                        echo '<p>Your total cost for gas will be <span class="result">$' .$total_f. '</span>.</p>';
                        echo '<p>You will be driving for a total of <span class="result">' .$total_hours. '</span> hours, equating to <span class="result">' .$days. '</span> days.</p>';
                        echo '</div>';

                } // end elseif isset
                
                else {
                    echo '<div class="box">';
                    echo '<h2 class="title red">Error!</h2>';
                    echo '<p class="center">Please fill out the form completely!</p>';
                    echo '</div>';
                }

            } // end server

        ?>

    </body>
    
</html>