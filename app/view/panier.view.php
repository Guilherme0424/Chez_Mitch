<div class="vague">
    <img id="un" src="public/images/vague_jaune.png">
    <img id="deu" src="public/images/vague_jaune(1).png">
    <!-- mettre 2 images pour faire toute la page  -->
</div>
<h2>VOTRE PANIER CONTIENT <?= $nb_biere ?> PRODUITS</h2>
<?php if (!empty($panier)) : ?>
    <div class="flex">
        <!-- Premier coté -->
        <div class="coté1">

            <!--         
            <?php foreach ($panier as $item) : ?>
                <div class="panier">
                    <div class="bie ma">
                        <img src="<?= $item['biere']['Image_biere']; ?>">
                        <p></p>
                    </div>
                    <div class="nom ma">
                        <p><?= $item['biere']['Nom']; ?></p>
                    </div>
                    <div class="prix ma">
                        <p><?= $item['biere']['Prix']; ?> €</p>
                    </div>
                    <div class="quant ma">
                        <p id="bord"><?= $item['quantite']; ?> produits</p>
                    </div>
                    <div class="picto ma"><img src="poubelle.png"></div>
                </div>
            <?php endforeach;

            ?> -->
            <div class="panier">
                <div class="bie ma">
                    <p></p>
                </div>
                <div class="nom ma">
                    <p>California Dream</p>
                </div>
                <div class="prix ma">
                    <p>6,50 €</p>
                </div>
                <div class="quant ma">
                    <p id="bord">1</p>
                </div>
                <div class="picto ma"><img src="poubelle.png"></div>
            </div>

        </div>
        <!-- Deuxième coté -->
        <div class="recap">
            <h2>RECAPITULATIF</h2>
            <!-- <div class="produit">
            <div class="flexi dis">
                <p class="pro pa"> produits</p>
                <p class="pri pa"><?php echo number_format($item['biere']['price'], 2); ?></p>
            </div>
            <div class="flexi dis">
                <p class="total pa">TOTAL</p>
                <p class="pri pa"><?php echo number_format($item['montant'], 2); ?></p>
            </div>

        </div> -->
            <div class="produit">
                <div class="flexi dis">
                    <p class="pro pa">3 produits</p>
                    <p class="pri pa">27 €</p>
                </div>
                <div class="flexi dis">
                    <p class="total pa">TOTAL</p>
                    <p class="pri pa">27 €</p>
                </div>

            </div>
            <div class="val">
                <a class="td">Valider mon panier </a>
            </div>
        </div>
    </div>
    <!-- <?php endif; ?> -->