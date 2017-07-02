<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Verify data with htmlspecialchars
    $user = htmlspecialchars($_POST['user']);
    $pwd = htmlspecialchars($_POST['password']);

    if (isset($user) && $user == null) {
        echo 'You need to set a username.';

    }

}
