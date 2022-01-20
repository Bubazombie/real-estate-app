<?php
session_start();

$_SESSION = []; //también se puede hacer con session_unset y con session_destroy

header('location: /');

?>