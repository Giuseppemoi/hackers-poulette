<?php

// function declaration to reset $_POST and variables
function reset_post(){
    global $array_post;
    foreach ($array_post as $key => $value) {
        $array_post[$key] = NULL;
    }
    unset($_POST);
}
