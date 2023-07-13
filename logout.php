<?php
    session_start();
    session_destroy();

    $msg = "You have Successfully Logout";
    header("Location: login.php?success=$msg");
?>