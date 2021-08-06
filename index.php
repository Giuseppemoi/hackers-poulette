<?php
include "assets/elements/header.php";
include "assets/elements/function_options.php";
include "assets/elements/post.php";
include "assets/elements/function_reset_post.php";
include "assets/elements/mail.php";
?>

<div class="form">
    <form action="" method="post">
        <div class="names">
            <label for="name">
                Name : 
                <input type="text" name="name" id="name" value="<?= (!isset($_POST["name"]) || $_POST["name"] === NULL) ? "" : $array_post["name"]; ?>">
                <?= !empty($_POST["submit"]) ? (array_key_exists("name", $array_error) ? "<strong class='error'>" . $array_error["name"] . "</strong>" : "") : "" ?>
            </label>
            <label for="firstname">
                Firstname : 
                <input type="text" name="firstname" id="firstname" value="<?= (!isset($_POST["firstname"]) || $_POST["firstname"] === NULL) ? "" : $array_post["firstname"]; ?>">
                <?= !empty($_POST["submit"]) ? (array_key_exists("firstname", $array_error) ? "<strong class='error'>" . $array_error["firstname"] . "</strong>" : "") : "" ?>
            </label>
        </div>
        <div class="gender">
            Gender : 
                <label for="male">
                    Male
                    <input type="radio" name="gender" id="male" value="male" 
                        <?= (isset($_POST["gender"]) && $array_post["gender"] === 'male') ?  'checked' : "";?>>
                </label>
                <label for="female">
                    Female
                    <input type="radio" name="gender" id="female" value="female" 
                        <?= (isset($_POST["gender"]) && $array_post["gender"] === 'female') ?  'checked' : "";?>>
                </label>
                <?= !empty($_POST["submit"]) ? (array_key_exists("gender", $array_error) ? "<strong class='error'>" . $array_error["gender"] . "</strong>" : "") : "" ?>
        </div>
        <label for="email">
            Email : 
            <input type="email" name="email" id="email" value="<?= !array_key_exists("email", $array_error) ? ((!isset($_POST["email"]) || $_POST["email"] === NULL) ? "" : $array_post["email"]) : "" ?>">
            <?= !empty($_POST["submit"]) ? (array_key_exists("email", $array_error) ? "<strong class='error'>" . $array_error["email"] . "</strong>" : "") : "" ?>
        </label>
        <label for="country">
            Select your country : 
            <select name="country" id="country">
                <option value="<?= (!isset($array_post["country"]) || $array_post["country"] === NULL) ? "" : $array_post["country"]; ?>">
                    <?= (!isset($_POST["country"]) || $_POST["country"] === NULL) ? "Choose a country!" : $array_post["country"]; ?>
                </option>
                <?php options($countries); ?>
            </select>
            <?= !empty($_POST["submit"]) ? (array_key_exists("country", $array_error) ? "<strong class='error'>" . $array_error["country"] . "</strong>" : "") : "" ?>
        </label>
        <label for="subject">
            Choose a subject : 
            <select name="subject" id="subject" >
                <?php options($subjects); ?>
            </select>
        </label>
        <label class="flex" for="msg">
            Your message : 
            <textarea name="msg" id="msg" cols="30" rows="10"><?= (!isset($_POST["message"]) || $_POST["msg"] === NULL) ? "" : $array_post["message"]; ?></textarea>
            <?= !empty($_POST["submit"]) ? (array_key_exists("message", $array_error) ? "<strong class='error'>" . $array_error["message"] . "</strong>" : "") : "" ?>
        </label>
        <input type="submit" name="submit">
    </form>
</div>

<?php
include "assets/elements/footer.php";
