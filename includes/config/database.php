<?php

function connectDB () : mysqli {
    $db = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');

    if (!$db) {
        echo 'Error: couldn\'t connect to DB.';
        exit;
    }

    return $db;
}