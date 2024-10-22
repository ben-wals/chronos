<?php

    function errorReturn($notif) {
        header("Location: ./login.html?notif=" . urlencode($notif));
    }

    // Starts a new session
    session_start();

    // Includes the required classes
    include './classes/db.php';

    // Creats a new accounts object parsing the forms username and the database name as arguments
    $acc = new acc($_POST['username']);
    
    if ($acc->getAccountInfo('Password') == null) {

        errorReturn("Invalid Username. No account? <a href='./sign-up.html'>Sign Up</a>");

    } else {

        // If the password inputted on the form matches that stored for the associated account
        if (password_verify($_POST['password'], $acc->getAccountInfo('Password'))) {
        
            // Starts a new session (by generating a new session id)
            session_regenerate_id();

            // Sets the session array key of loggedin to a value of True
            $_SESSION['loggedin'] = TRUE;

            // Sets the session array key of name to a value of the inputted Username
            $_SESSION['name'] = $_POST['username'];

            // Sets the session array key of id to a value of the session id
            $_SESSION['id'] = $id;

            $acc->updateAccountInfo('loginAttempts', 0);

            // Redirects the user to the users launchpad
            header("Location: ./launchpad.html");

        } else {
        
            $attempts = $acc->getAccountInfo('loginAttempts') + 1;

            if($attempts > 10) {
                $acc->updateAccountInfo('AccState', -1);
                $lockoutTime = date('H:i:s', strtotime('+15 minutes', strtotime(date('H:i:s'))));
                errorReturn('Incorrect Password. Your account is now temporarily locked until ' . $lockoutTime);
            } else {
                $acc->updateAccountInfo('loginAttempts', $attempts);
                errorReturn('Incorrect Password. You have ' . (10 - $attempts) . ' attempts remaining before your account will be temporarily locked.');
            }
        }

    }
?>