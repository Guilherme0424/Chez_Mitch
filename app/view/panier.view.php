
        <div class="vague">
            <img id="un" src="public/images/vague_jaune.png">
            <img id="deu" src="public/images/vague_jaune1.png">
            <!-- mettre 2 images pour faire toute la page  -->
        </div>

        <div class="flex">
            <!-- Premier coté -->
            <div class="coté1">
                <h2>VOTRE PANIER CONTIENT 3 PRODUITS</h2>
                 <?php if (!empty($panier)): ?> 
                    <?php foreach ($panier as $item): ?>
                <div class="panier">
                    <div class="bie ma">
                        <img src="<?php $item['biere']['Image_biere'];?>">
                        <p></p>
                    </div>
                    <
                    <div class="nom ma">
                        <p><?php echo htmlspecialchars($item['biere']['name']); ?></p>
                    </div>
                    <div class="prix ma">
                        <p><?php echo number_format($item['biere']['price'], 2); ?></p>
                    </div>
                    <div class="quant ma">
                        <p id="moins">-</p>
                        <p id="bord"><?php echo $item['quantite']; ?></p>
                        <p id="plus">+</p>
                    </div>
                    <div class="picto ma"><img src="poubelle.png"></div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- Deuxième coté -->
            <div class="recap">
                <h2>RECAPITULATIF</h2>
                <div class="produit">
                    <div class="flexi dis">
                        <p class="pro pa"> produits</p>
                        <p class="pri pa"><?php echo number_format($item['biere']['price'], 2); ?></p>
                    </div>
                    <div class="flexi dis">
                        <p class="total pa">TOTAL</p>
                        <p class="pri pa"><?php echo number_format($item['montant'], 2); ?></p>
                    </div>

                </div>
                <div class="val">
                    <a class="td">Valider mon panier </a>
                </div>
            </div>
        </div>
        <?php endif; ?>




