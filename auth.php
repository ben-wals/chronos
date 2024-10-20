<?php

    session_start();

    include './classes/db.php';

    $acc = new acc($_POST['username'], dbName: 'chronos_acc');
    
    if (password_verify($_POST['password'], $acc->getAccountInfo('Password'))) {
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        header("Location: ./launchpad");
    }
    
?>