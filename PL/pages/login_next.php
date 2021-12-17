<?php
require_once('../../BLL/usersManager.php');
include_once("../../DTO/user.php");

if (isset($_POST['submitBtn'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    try {

        $user = new user($username, $pass);

        $result = loginUser($user);
        if ($result) {
            session_start();
            $_SESSION['loggeduser'] = UserByUsername($username);

            if ($_SESSION['loggeduser']->getRole() == 3) {
                echo "<script type='text/javascript'>"
                    . " window.location.href='Agency.html';
            </script>";
            } else if ($_SESSION['loggeduser']->getRole() == 2) {
                echo "<script type='text/javascript'>"
                    . " window.location.href='adminPage.php';
            </script>";
            } else if ($_SESSION['loggeduser']->getRole() == 1) {
                echo "<script type='text/javascript'>"
                    . " window.location.href='student_dashboard.php';
            </script>";
            }
        } else {
            echo "<script type='text/javascript'>"
                . " window.location.href='../index.php';"
                . "alert('Incorect Username or Password.');"
                . " </script> ";
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
} else {
    echo "cxvxbnbmh,j";
}
