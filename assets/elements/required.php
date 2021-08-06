<?php

$require_name = !empty($_POST["submit"]) ? (array_key_exists("name", $array_error) ? "<strong class='error'>" . $array_error["name"] . "</strong>" : "") : "" ;
$require_firstname = !empty($_POST["submit"]) ? (array_key_exists("firstname", $array_error) ? "<strong class='error'>" . $array_error["firstname"] . "</strong>" : "") : "" ;
$require_gender = !empty($_POST["submit"]) ? (array_key_exists("gender", $array_error) ? "<strong class='error'>" . $array_error["gender"] . "</strong>" : "") : "" ;
$require_email = !empty($_POST["submit"]) ? (array_key_exists("email", $array_error) ? "<strong class='error'>" . $array_error["email"] . "</strong>" : "") : "" ;
$require_country = !empty($_POST["submit"]) ? (array_key_exists("country", $array_error) ? "<strong class='error'>" . $array_error["country"] . "</strong>" : "") : "" ;
$require_message = !empty($_POST["submit"]) ? (array_key_exists("message", $array_error) ? "<strong class='error'>" . $array_error["message"] . "</strong>" : "") : "" ;