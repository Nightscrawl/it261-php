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
            Are you a returning customer?
            <ul>
                <li><input type="radio" name="returnCust" value="yes"
                    <?php if( isset($_POST['returnCust']) && $_POST['returnCust'] == 'yes' ) echo 'checked="checked"'; ?>> Yes</li>

                <li><input type="radio" name="returnCust" value="no"
                    <?php if( isset($_POST['returnCust']) && $_POST['returnCust'] == 'no' ) echo 'checked="checked"'; ?>> No</li>
            </ul>
            <span><?php echo $returnCustErr; ?></span>                    
        </label>

        <label>
            What is your favorite ASP album?
            <ul>
                <li><input type="checkbox" name="albums[]" value="vermisst"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'vermisst' ) echo 'checked="checked"'; ?>> Hast du mich vermisst?</li>

                <li><input type="checkbox" name="albums[]" value="duett"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'duett' ) echo 'checked="checked"'; ?>> :Duett</li>

                <li><input type="checkbox" name="albums[]" value="weltunter"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'weltunter' ) echo 'checked="checked"'; ?>> Weltunter</li>

                <li><input type="checkbox" name="albums[]" value="aus der tiefe"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'aus der tiefe' ) echo 'checked="checked"'; ?>> Aus der Tiefe</li>

                <li><input type="checkbox" name="albums[]" value="requiembryo"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'requiembryo' ) echo 'checked="checked"'; ?>> Requiembryo</li>

                <li><input type="checkbox" name="albums[]" value="zaubererbruder"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'zaubererbruder' ) echo 'checked="checked"'; ?>> Zaubererbruder</li>

                <li><input type="checkbox" name="albums[]" value="fremd"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'fremd' ) echo 'checked="checked"'; ?>> fremd</li>

                <li><input type="checkbox" name="albums[]" value="maskenhaft"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'maskenhaft' ) echo 'checked="checked"'; ?>> Maskenhaft – Ein Versinken in elf Bildern</li>

                <li><input type="checkbox" name="albums[]" value="astoria"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'astoria' ) echo 'checked="checked"'; ?>> Verfallen (Zweiteiler), Folge 1: Astoria</li>

                <li><input type="checkbox" name="albums[]" value="fassaden"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'fassaden' ) echo 'checked="checked"'; ?>> Verfallen (Zweiteiler), Folge 2: Fassaden</li>

                <li><input type="checkbox" name="albums[]" value="geisterfahrer"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'geisterfahrer' ) echo 'checked="checked"'; ?>> Das GeistErfahrer Langspielalbum</li>

                <li><input type="checkbox" name="albums[]" value="zutiefst"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'zutiefst' ) echo 'checked="checked"'; ?>> zutiefst ASP</li>

                <li><input type="checkbox" name="albums[]" value="kosmonautilus"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'sosmonautilus' ) echo 'checked="checked"'; ?>> Kosmonautilus</li>
            </ul>
            <span><?php echo $albumsErr; ?></span>                                        
        </label>

        <label>
            Tell us why!
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