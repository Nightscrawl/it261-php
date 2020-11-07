<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ) ?>" method="POST">  <!-- the form action is pointing to the page we are on -->
    <!-- htmlspecialchars function makes page secure -->

    <fieldset>

        <label>
            First Name
            <input type="text" name="firstName" value="<?php 
                if( isset($_POST['firstName']) ) echo htmlspecialchars( $_POST['firstName'] ); ?>"><br />  <!-- if isset post name is set, then show the post name -->
            <span><?php echo $firstNameErr; ?></span>
        </label>

        <label>
            Last Name
            <input type="text" name="lastName" value="<?php 
                if( isset($_POST['lastName']) ) echo htmlspecialchars( $_POST['lastName'] ); ?>"><br />
            <span><?php echo $lastNameErr; ?></span>
        </label>

        <label>
            Email
            <input type="email" name="email" value="<?php 
                if( isset($_POST['email']) ) echo htmlspecialchars( $_POST['email'] ); ?>"><br />
            <span><?php echo $emailErr; ?></span>
        </label>

        <label>
            Phone
            <input type="telephone" name="tel" placeholder="xxx-xxx-xxxx" value="<?php 
                if( isset($_POST['tel']) ) echo htmlspecialchars( $_POST['tel'] ); ?>"><br />
            <span><?php echo $telErr; ?></span>
        </label>

        <label>
            Gender
            <ul>  <!-- if post gender was set
                        is the post gender equal to the value? -->
                <li><input type="radio" name="gender" value="male"
                    <?php if( isset($_POST['gender']) && $_POST['gender'] == 'male' ) echo 'checked="checked"'; ?>> Male</li>

                <li><input type="radio" name="gender" value="female"
                    <?php if( isset($_POST['gender']) && $_POST['gender'] == 'female' ) echo 'checked="checked"'; ?>> Female</li>

                <li><input type="radio" name="gender" value="prefer not to say"
                    <?php if( isset($_POST['gender']) && $_POST['gender'] == 'prefer not to say' ) echo 'checked="checked"'; ?>> Prefer not to say</li>
            </ul>
            <span><?php echo $genderErr; ?></span>                    
        </label>

        <label>
            Favorite Wines
            <ul>
                <li><input type="checkbox" name="wines[]" value="cabernet"
                    <?php if( isset($_POST['wines']) && $_POST['wines'] == 'cabernet' ) echo 'checked="checked"'; ?>> Cabernet</li>

                <li><input type="checkbox" name="wines[]" value="merlot"
                    <?php if( isset($_POST['wines']) && $_POST['wines'] == 'merlot' ) echo 'checked="checked"'; ?>> Merlot</li>

                <li><input type="checkbox" name="wines[]" value="syrah"
                    <?php if( isset($_POST['wines']) && $_POST['wines'] == 'syrah' ) echo 'checked="checked"'; ?>> Syrah</li>

                <li><input type="checkbox" name="wines[]" value="malbec"
                    <?php if( isset($_POST['wines']) && $_POST['wines'] == 'malbec' ) echo 'checked="checked"'; ?>> Malbec</li>

                <li><input type="checkbox" name="wines[]" value="pinot"
                    <?php if( isset($_POST['wines']) && $_POST['wines'] == 'pinot' ) echo 'checked="checked"'; ?>> Pinot Noir</li>

                <li><input type="checkbox" name="wines[]" value="zinfandel"
                    <?php if( isset($_POST['wines']) && $_POST['wines'] == 'zinfandel' ) echo 'checked="checked"'; ?>> Zinfandel</li>
            </ul>
            <span><?php echo $winesErr; ?></span>                                        
        </label>

        <label>
            Comments
            <textarea name="comments"><?php if( isset($_POST['comments']) ) echo htmlspecialchars( $_POST['comments'] ); ?></textarea>
            <span><?php echo $commentsErr; ?></span>
        </label>

        <label>
            <input type="radio" name="privacy" value="<?php 
                    if( isset($_POST['privacy']) ) echo htmlspecialchars( $_POST['privacy'] ); ?>"> I agree to your privacy policy
            <span><?php echo $privacyErr; ?></span>                    
        </label>

        <input type="submit" value="Send">

        <button class="button"><a href="">Reset Form</a></button>

    </fieldset>

</form> 