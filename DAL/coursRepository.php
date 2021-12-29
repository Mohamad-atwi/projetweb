<?php
require_once("../../DTO/cour.php");
require_once("connection.php");

function AddCours($cours) {
    $conn = openConnection();
    $signupResponse = false;
    try {
        $sql = "INSERT INTO `cours`(`nom`,`abreviation`,`prof_id`,`credits`,`formation_id`) VALUES(?,?,?,?,?);";
        $stmt = $conn->prepare($sql);
        $nom = $cours->getNom();
        $abreviation = $cours->getAbreviation();
        $prof_id = $cours->getProf_id();
        $credits = $cours->getNb_credits();
        $formation_id = $cours->getFormation_id();
        $stmt->bind_param("ssiii",$nom,$abreviation,$prof_id,$credits, $formation_id);
        if ($stmt->execute())
            $signupResponse = true;
        $stmt->close();
        closeConnection($conn);
    } catch (Exception $ex) {
    }
    return $signupResponse;
}
