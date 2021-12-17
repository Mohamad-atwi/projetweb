<?php

include_once("../../DTO/user.php");
session_start();
$user = $_SESSION['loggeduser'];
echo " you are logged in with :". $user->getUsername() ." ". $user->getPassword()." ". $user->getEmail_personel()." ". $user->getRole() ;
?>
<html>
    <body>
        <a href="Admin_Dashboard.php">adminpage</a>
    </body>
</html>