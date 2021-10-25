<?php
session_start();
echo " you are logged in with :". $_SESSION["username"]." ". $_SESSION["password"] ;
?>