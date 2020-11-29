<?php
include('config.php');
include('includes/header.php');
?>


<div class="wrapper">

    <main>
        <h1><?php echo $mainHeadline; ?></h1>

        <table class="albums">

            <tr>
                <th>Album Cover</th>
                <th>Title</th>
                <th>Release Year</th>
            </tr>

        <?php foreach($gallery_albums as $name => $image) : ?>

            <?php
                $num = array_search( $name, array_keys($gallery_albums) );
                $num++;
            ?>

            <tr>
                <td><img src="img/<?php echo substr($image, 0, 3).$num; ?>.jpg" /></td>
                <td><?php echo $name; ?></td>
                <td><?php echo substr($image, 4); ?></td>
            </tr>

        <?php endforeach; ?>

        </table>

    </main>

    <aside>
        <h3>Here is a random album!</h3>

        <?php echo randImages3($art); ?>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer malesuada nunc vel risus commodo viverra. A diam sollicitudin tempor id eu nisl nunc mi ipsum.</p>

    </aside>


<?php include('includes/footer.php'); ?>   
