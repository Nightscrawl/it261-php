<!DOCTYPE html>
    <head>
        <title>My Adder Assignment</title>
    </head>

    <body>

        <h1>Adder.php</h1>
        
        <form action="" method="POST">
            <label>Enter the first number:</label><input type="text" name="num1"><br>

            <label>Enter the second number:</label><input type="text" name="num2"><br>

            <input type="submit" value="Add Em!!">
            
        </form>

        <?php
        //adder-wrong.php

            if( isset($_POST['num1']) ) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $myTotal = $num1 + $num2;
                echo '<h2>You added ' .$num1. ' and ' .$num2. '</h2>';
                echo '<p style="color:red;">and the answer is <br>' .$myTotal. '!</p>';
            }

        ?>

        <p><a href="">Reset page</a></p>

    </body>

</html>


<!-- 
// [ description, line# (if applicable) ]

// php closed in wrong place; moved above html
// removed errant punctuation after html closing, 35
// added second quote for submit value, 15
// added doctype to html tag, 1
// removed backslash in opening form tag, 10
// added method=post to form tag, 10
// added opening form label, 11
// added opening form label, 13
// moved closing label after second number prompt text, 13
// removed - in var declaration for $myTotal, 26
// removed double quotes from first echo, 27
// added single quote after "and" in first echo, 27
// added single quotes around ! and closing p tag in second echo, 28
// added period before $myTotal in second echo, 28
// moved the style inside the p tag, 28
// changed double quote before $myTotal to single, 28
// removed third echo; brought reset link below form, 32
// moved php code into the html, 20
// added doctype, 1
// input Num1 to num1, 11
// $Num2 to $num2 in equation, 26
// added double quote to close style attribute, 28
// added closing h2 tag, 27
// removed empty styles in head
-->