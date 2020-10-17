<?php include('includes/header.php') ?>

<div class="content inner sidebar">

    <main>

        <h1><?php echo $coffee; ?></h1>

        <p><?php echo $content; ?></p>

    </main>

    <aside>

        <img src="img/<?php echo $pic; ?>" alt="<?php echo $alt; ?>" />

        <p>Click to see all of our daily specials.</p>

        <ul>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
        </ul>

    </aside>

    <?php include('includes/footer.php'); ?>