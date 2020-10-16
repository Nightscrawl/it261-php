<?php
// currency logic


// 1 ruble = 0.013 dollars
// 1 pound sterling = 1.28 dollars
// 1 canadian dollars = 0.76 dollars
// 1 euro = 1.18 dollars
// 1 japanese yen = 0.0094 dollars

$rubles = 10007;
$rubles *= 0.013;
$rubles_num = number_format($rubles, 2);

$canada = 5000;
$canada *= 0.76;
$canada_num = number_format($canada, 2);

$pounds = 500;
$pounds *= 1.28;
$pounds_num = number_format($pounds, 2);

$euros = 1200;
$euros *= 1.18;
$euros_num = number_format($euros, 2);

$yen = 2000;
$yen *= 0.0094;
$yen_num = number_format($yen, 2);

$total = $rubles + $canada + $pounds + $euros + $yen;
$total_num = number_format($total, 2); 


?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>currency</title>
    <meta name="author" content="K. Abell" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,inital-scale=1" />
    <meta name="robots" content="noindex,nofollow" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        table {
            width: 300px;
            margin: 20px auto;
            border: 1px solid green;
        }
    </style>
</head>

<body>

    <table>

        <tr>
            <th>money</th>
            <th>dollars</th>
        </tr>

        <tr>
            <td>rubles</td>
            <td><?php echo '$'.$rubles_num.''; ?></td>
        </tr>

        <tr>
            <td>canadian</td>
            <td><?php echo '$'.$canada_num.''; ?></td>
        </tr>

        <tr>
            <td>pounds</td>
            <td><?php echo '$'.$pounds_num.''; ?></td>
        </tr>

        <tr>
            <td>euros</td>
            <td><?php echo '$'.$euros_num.''; ?></td>
        </tr>

        <tr>
            <td>yen</td>
            <td><?php echo '$'.$yen_num.''; ?></td>
        </tr>

        <tr>
            <th>total</th>
            <th><?php echo '$'.$total_num.''; ?></th>
        </tr>
    
    </table>






</body>

</html>