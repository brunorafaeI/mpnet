<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') :

    foreach ($_POST as $key => $value) :
        $$key = htmlspecialchars(ltrim($value));
    endforeach;

    if (!$username) :
        echo 'You need to set a username.';

    endif;

endif;
