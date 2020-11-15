<?php
include('config.php');
include('includes/header.php');
?>


<div class="wrapper">

    <main>
        <h1><?php echo $mainHeadline; ?></h1>

        <table class="candidates">
        <?php foreach($people as $fullName => $image) : ?>

            <tr>
                <td><img src="img/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo $fullName; ?>" /></td>
                <td><?php echo str_replace('_', ' ', $fullName); ?></td>
                <td><?php echo substr($image, 6); ?></td>
            </tr>

        <?php endforeach; ?>
        </table>

    </main>

    <aside>
        <h3>This is my headline 3 on the gallery page</h3>

        <?php echo randImages2($candidates); ?>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer malesuada nunc vel risus commodo viverra. A diam sollicitudin tempor id eu nisl nunc mi ipsum.</p>

    </aside>

    




<?php include('includes/footer.php'); ?>   
