<?php
// login page, simple form

include('server.php');
include('includes/header.php');

?>

<h1>Login</h1>

<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="POST">

    <fieldset>

        <label>User Name
            <input type="text" name="UserName" value="<?php if( isset($_POST['UserName']) ) echo $_POST['UserName']; ?>" />
        </label>

        <label>Password
            <input type="password" name="Password" value="" />
        </label>


        <?php include('errors.php'); ?>

        <button type="submit" class="button" name="login_user">Login</button>

        <button type="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>

    </fieldset>

</form>

<p>Haven't registered? <a href="register.php">Register here</a>.</p>