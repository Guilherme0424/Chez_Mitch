<?php
<?php
function getSpecificBeers(PDO $pdo, $ids) {
    $stmt = $pdo->prepare("SELECT * FROM biere WHERE id_biere=:id");
    $stmt->bindParam(':id',$ids, PDO::PARAM_INT);
    $stmt->execute();
    $produit=$stmt->fetchAll();
    // while ($row = mysqli_fetch_assoc($result)) {
    //     $biere[$row['id']] = $row;
    // }
    return $produit;
}


