<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="author" content="K. Abell" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,inital-scale=1" />
        <meta name="robots" content="noindex,nofollow" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    
    <body class="<?php echo $body; ?>">
    
        <header>

            <div class="inner-header">

                <img class="logo" src="img/logo.png" alt="logo" />

                <nav>

                    <!-- <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="daily.php">Daily</a></li>
                        <li><a href="customers.php">Customers</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                    </ul> -->

                    <ul>
                        <?php echo makeLinks($nav); ?>
                    </ul>                

                </nav>

            </div>

        </header>