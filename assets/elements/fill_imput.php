<?php

$name_isset = isset($_POST["name"]) ? $array_post["name"] : "";
$firstname_isset = isset($_POST["firstname"]) ? $array_post["firstname"] : "";
$male_gender_isset = (isset($_POST["gender"]) && $array_post["gender"] === 'male')? "checked" : "";
$female_gender_isset = (isset($_POST["gender"]) && $array_post["gender"] === 'female')? "checked" : "";
$email_isset = isset($_POST["email"]) ? $array_post["email"] : "";


$country_isset = isset($_POST["country"]) ? $array_post["country"] : "";
$country_option = !empty($array_post["country"]) ? $array_post["country"] : "Choose a country!";



$subject_isset = isset($_POST["subject"]) ? "<option value='{$array_post['subject']}'>{$array_post['subject']}</option>" : "Other";
$message_isset = isset($_POST["msg"]) ? $array_post["message"] : "";
