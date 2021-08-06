<?php


function reset_post(){
    $all_not_empty = 
        empty($array_post["name"])
        && empty($array_post["firstname"]) 
        && empty($array_post["gender"]) 
        && empty($array_post["email"]) 
        && empty($array_post["country"]) 
        && empty($array_post["message"]);
    if (
        isset($_POST["name"]) &&
        isset($_POST["firstname"]) &&
        isset($_POST["gender"]) &&
        isset($_POST["email"]) &&
        isset($_POST["country"]) &&
        isset($_POST["msg"]) &&
        !empty($_POST["submit"]) &&
        !$all_not_empty
    ) {
        global $array_post;
        foreach ($array_post as $key => $value) {
            $array_post[$key] = NULL;
        }
        // $_POST["name"] = "";
        // $_POST["firstname"] = NULL;
        // $_POST["gender"] = NULL;
        // $_POST["email"] = NULL;
        // $_POST["country"] = NULL;
        // $_POST["msg"] = NULL;
        unset($_POST);
        //$_POST = [];
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        // echo "<pre>";
        // var_dump(isset($_POST["name"]));
        // echo "</pre>";
    }
}
