<?php
function getStudent(string $role, PDO $pdo): array {
    $sql = "SELECT * FROM equipe WHERE Role= :role";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':role',$role , pdo::PARAM_STR);
    $stmt->execute();
    
    $student = $stmt->fetchAll();
    return $student;
}

function getAllequipe(PDO $pdo, $equipe){
    $sql = "SELECT * FROM equipe";
    
    $stmt = $pdo->query($sql);
    
    $equipe = $stmt->fetchAll();
    return $equipe;
}