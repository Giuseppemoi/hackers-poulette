<?php
$array_error = [];

// on click on submit button the array_post will get the inputs value with the post methode
// then check if there is some empty inputs and push an error sentence in the array array_error
if (isset($_POST["submit"])){
    $array_post = [
        "name" => htmlspecialchars($_POST["name"]),
        "firstname" => htmlspecialchars($_POST["firstname"]),
        "gender" => htmlspecialchars($_POST["gender"]),
        "email" => filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL),
        "country" => htmlspecialchars($_POST["country"]),
        "subject" => htmlspecialchars($_POST["subject"]),
        "message" => htmlspecialchars($_POST["msg"])
    ];
    
    foreach ($array_post as $key => $value) {
        if (empty($value)) {
            $array_error[$key] = "$key required";
        }
    }
}

// function dump($var){
//     echo "<pre>";
//     var_dump($var);
//     echo "</pre>";
// }
// dump($array_post);
// dump($array_error);



