<?php
session_start(); // Start the session
if(isset($_SESSION['spelernr']))
{
    // user logs in
    $user = $_SESSION['spelernr'];
    // Do something with $user
}
?>
