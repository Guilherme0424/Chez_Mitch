<form action="ajout_biere.php" method="post" enctype="multipart/formdata">
    <div>
        <input type="hidden" name="ref" value=$id >
        <label for="quantite">Quantité</label>
        <input type="number" name="quantite" id="quantite">
    </div>
    <button type="submit">Ajouter au panier</button>
</form>