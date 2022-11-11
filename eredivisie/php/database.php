<?php
    // session_start();
    // //'when session key loggedIn NOT is set
    // // then this is the first page load
    // if(!isset($_SESSION['loggedIn']))
    // {
    //     $_SESSION['loggedIn'] = true;
    // }


    $servername = "localhost";  // Define servername.
    $username = "root";         // Define username.
    $password = "";             // Define password.
    $dbname = "eredivisie";     // Define database name.

    // Create connection, contained in variable $conn, using new mysqli, servername, username, password and database.
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo ("Connection failed: " . $conn->connect_error . ". try again later.");
    }
?>