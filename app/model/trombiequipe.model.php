<?php
function getStudent(int $numStudent, PDO $pdo): array {
    $sql = "SELECT * FROM students WHERE id= :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id',$numStudent , pdo::PARAM_INT);
    $stmt->execute();
    
    if(!$student = $stmt->fetch()) {
        $_SESSION['message'] = "L'étudiant n'existe pas";
        header('Location: Trombinoscope.php') ;
        exit;
    }
    return $student;
}

function getAllequipe(PDO $pdo, $equipe){
    $sql = "SELECT * FROM equipe";
    
    $stmt = $pdo->query($sql);
    
    $equipe = $stmt->fetchAll();
    return $equipe;
}