<?php
include "assets/elements/header.php";
include "assets/elements/post.php";
include "assets/elements/function_options.php";
include "assets/elements/function_reset_post.php";
include "assets/elements/mail.php";
include "assets/elements/fill_input.php";
include "assets/elements/required.php";
?>

<div class="form">
    <form action="" method="post">
        <div class="names">
            <label for="name">
                Name : 
                <input type="text" name="name" id="name" value="<?= $name_isset ?>">
                <?= $require_name ?>
            </label>
            <label for="firstname">
                Firstname : 
                <input type="text" name="firstname" id="firstname" value="<?= $firstname_isset ?>">
                <?= $require_firstname ?>
            </label>
        </div>
        <div class="gender">
            Gender : 
                <label for="male">
                    Male
                    <input type="radio" name="gender" id="male" value="male" <?= $male_gender_isset ?> >
                </label>
                <label for="female">
                    Female
                    <input type="radio" name="gender" id="female" value="female" <?= $female_gender_isset ?> >
                </label>
                <?= $require_gender ?>
        </div>
        <label for="email">
            Email : 
            <input type="email" name="email" id="email" value="<?= $email_isset ?>">
            <?= $require_email ?>
        </label>
        <label for="country">
            Select your country : 
            <?= options($countries, 'country'); ?>
            <?= $require_country ?>
        </label>
        <label for="subject">
            Choose a subject : 
            <?= options($subjects, "subject"); ?>
        </label>
        <label class="flex" for="msg">
            Your message : 
            <textarea name="msg" id="msg" cols="30" rows="10"><?= $message_isset ?></textarea>
            <?= $require_message ?>
        </label>
        <input id="website" name="website" type="text" value=""  />
        <input type="submit" name="submit">
    </form>
</div>

<?php
include "assets/elements/footer.php";
