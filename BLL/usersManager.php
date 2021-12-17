<?php
require("../../DAL/userRepository.php");

function loginUser($user) {
    return login($user);
}

function UserByUsername($username)
{
    echo "<script type='text/javascript'>"
                . "alert('ppppppppp');"
                . " </script> ";
    return getUserByUsername($username);
}
