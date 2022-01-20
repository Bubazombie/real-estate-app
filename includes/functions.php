<?php

require 'app.php';

function includeTemplate($name, $index = false) {
    include TEMPLATES_URL . "/${name}.php";
}

function isAuth(): bool {
    session_start();
    $auth = $_SESSION['login'];

    if (!$auth) {
        return true;
    }
    return false;
}
