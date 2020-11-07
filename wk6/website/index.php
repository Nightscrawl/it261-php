<?php
include('config.php');
include('includes/header.php');
?>


<div class="wrapper">

    <h1 class="<?php echo $center; ?>"><?php echo $mainHeadline; ?></h1>

    <?php echo randImages($photos); ?>

    <blockquote>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer malesuada nunc vel risus commodo viverra. A diam sollicitudin tempor id eu nisl nunc mi ipsum."
    </blockquote>

    <p><a href="https://github.com/Nightscrawl/it261-php/tree/main/wk6/website">Extra credit link to GitHub.</a></p>


<?php include('includes/footer.php'); ?>   
