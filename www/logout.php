<?php

    include '../controller/controller_content.php';

    $ctrl_content = new controller_content();
    $ctrl_content->logout();
    session_start();
    session_unset();
    session_destroy();

    header('Location: index.php');
    exit();
?>