<?php
require_once("../../DTO/user.php");
require_once("connection.php");

function login($user)
{
    $conn = openConnection();
    $loginResponse = false;
    try {
        $sql = "SELECT * FROM users WHERE username=? AND password=?"; // SQL with parameters
        $stmt = $conn->prepare($sql);
        $un = $user->getUsername();
        $pass = $user->getPassword();
        $stmt->bind_param("ss", $un, $pass);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        if ($result->num_rows > 0)
            $loginResponse = true;
        closeConnection($conn);
    } catch (Exception $ex) {
    }
    return $loginResponse;
}

function getUserByUsername($username)
{
    $conn = openConnection();
    $userResponse = null;

    try {
        $sql = "SELECT * FROM users WHERE username=? "; // SQL with parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        if ($result->num_rows > 0) {
            $userResponse = new user("","");
            if ($row = $result->fetch_assoc()) {
                $userResponse->setUsername($row["username"]);
                $userResponse->setId($row["iduser"]);
                $userResponse->setPrenom($row["prenom"]);
                $userResponse->setNom($row["nom"]);
                $userResponse->setRole($row["role"]);
                $userResponse->setDate_de_naissance($row["date_de_naissance"]);
                $userResponse->setPassword($row["password"]);
                $userResponse->setEmail_personel($row["email_personel"]);
                $userResponse->setEmail_universitaire($row["email_universitaire"]);
                $userResponse->setSexe($row["sexe"]);
            }
        }
        closeConnection($conn);
    } catch (Exception $ex) {
    }
    return $userResponse;
}
