<?php
    session_start();
    // session_destroy();
    unset($_SESSION["adminSigned"]);
    header("location:adminLogin.php");
?>