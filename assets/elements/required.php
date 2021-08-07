<?php

// variable declaration to check if there is errors in the array_error and display them
$require_name = isset($_POST["submit"]) ? (array_key_exists("name", $array_error) ? "<strong class='error'>" . $array_error["name"] . "</strong>" : "") : "" ;
$require_firstname = isset($_POST["submit"]) ? (array_key_exists("firstname", $array_error) ? "<strong class='error'>" . $array_error["firstname"] . "</strong>" : "") : "" ;
$require_gender = isset($_POST["submit"]) ? (array_key_exists("gender", $array_error) ? "<strong class='error'>" . $array_error["gender"] . "</strong>" : "") : "" ;
$require_email = isset($_POST["submit"]) ? (array_key_exists("email", $array_error) ? "<strong class='error'>" . $array_error["email"] . "</strong>" : "") : "" ;
$require_country = isset($_POST["submit"]) ? (array_key_exists("country", $array_error) ? "<strong class='error'>" . $array_error["country"] . "</strong>" : "") : "" ;
$require_message = isset($_POST["submit"]) ? (array_key_exists("message", $array_error) ? "<strong class='error'>" . $array_error["message"] . "</strong>" : "") : "" ;