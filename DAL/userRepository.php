<?php
require_once(__DIR__."/../DTO/user.php");
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
            $userResponse = new user("", "");
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

function AddUser($user)
{
    $conn = openConnection();
    $signupResponse = false;
    try {
        $sql = "INSERT INTO `users`(`prenom`,`nom`,`role`,`date_de_naissance`,`username`,`password`,`email_personel`,
        `email_universitaire`,`sexe`,`formation_id`,`phone`,`Adresse`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?);";
        $stmt = $conn->prepare($sql);
        $prenom = $user->getPrenom();
        $nom = $user->getNom();
        $role = $user->getRole();
        $date_de_naissance = $user->getDate_de_naissance();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $email_personel = $user->getEmail_personel();
        $email_universitaire = $user->getEmail_universitaire();
        $sexe = $user->getSexe();
        $formation_id = $user->getFormationId();
        $phone = $user->getPhone();
        $Adresse = $user->getAdresse();
        $stmt->bind_param("ssissssssiss", $prenom, $nom, $role, $date_de_naissance, $username, $password, $email_personel, $email_universitaire, $sexe, $formation_id, $phone, $Adresse);
        if ($stmt->execute())
            $signupResponse = true;
        $stmt->close();
        closeConnection($conn);
    } catch (Exception $ex) {
    }
    return $signupResponse;
}

function getAllProf() {
    $conn = openConnection();
    $query = "SELECT * FROM users where role=3;";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == false) {
        closeConnection($conn);
        return null;
    }
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $user = new user();
        $user->setId($row["iduser"]);
        $user->setPrenom($row["prenom"]);
        $user->setNom($row["nom"]);
        $user->setDate_de_naissance($row["date_de_naissance"]);
        $user->setEmail_personel($row["email_personel"]);
        $user->setSexe($row["sexe"]);
        $user->setPhone($row["phone"]);
        $user->setAdresse($row["Adresse"]);
        $user->setUsername($row["username"]);
        $user->setEmail_universitaire($row["email_universitaire"]);
        $users[$i] = $user;
        $i++;
    }
    closeConnection($conn);
    return $users;
}