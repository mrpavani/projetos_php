<?php

    session_start();

    $BASE_URL = "httpS://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';

    ?>