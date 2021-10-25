<?php
session_start();
$urn = $_POST['username'];
$psd = $_POST['pass'];
if (login($urn, $psd)) {
    $_SESSION["username"] = $urn;
    $_SESSION["password"] = $psd;
    echo "Session variables are set.";
} else {
    $_SESSION["username"] = $urn;
    $_SESSION["password"] = $psd;
    echo "Session variables are set.";
}

function login($username, $password)
{
    if (strcmp($username, "hassan") == 0 && strcmp($password, "khalife") == 0)
        return true;
    return true;
}
?>
<html>
<br>
<a href="third.php">click memory_get_peak_usage</a>

</html>