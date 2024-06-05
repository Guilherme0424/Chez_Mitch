<body>
    <section>
        <div class="gauche">
            <div class="titre">
                <h1><?php echo htmlspecialchars($biere['Nom']); ?></h1>
            </div>
            <div class="texte">
                <h3><?php echo htmlspecialchars($biere['Description']); ?></h3>
                <a href="#"><img src="public/images/rond noir.svg" alt="rond noir"></a>
                <a href="#"><h4 id="achat">Achetez <br>maintenant !</h4></a>
            </div>
            <div class="flèche">
                <img src="public/images/flèche noir.png">
            </div>
            <div class="rond"></div>
        </div>
        <div class="vaguedroite">
            <img src="public/images/Vague Verticale beige.svg">
        </div>
        <div class="biere">
            <img src="public/images/<?php echo htmlspecialchars($biere['Image_biere']); ?>" id="originale">
        </div>
        <div class="droite">
            <div class="liste">
                <ul>
                    <li><h3>Degrés</h3></li>
                </ul>
                <ul class="sous-titre">
                    <li><h4><?php echo htmlspecialchars($biere['Degres']); ?></h4></li><br>
                </ul>

                <ul>
                    <li><h3>Ingrédients</h3></li>
                </ul>
                <ul class="sous-titre">
                    <?php
                    $ingredients = explode(',', $biere['Ingredients']);
                    foreach ($ingredients as $ingredient) {
                        echo '<li><h4>' . htmlspecialchars($ingredient) . '</h4></li>';
                    }
                    ?><br>
                </ul>
                <ul>
                    <li><h3>Type</h3></li>
                </ul>
                <ul class="sous-titre">
                    <li><h4><?php echo htmlspecialchars($biere['Type']); ?></h4></li>
                </ul>
            </div>
        </div>
    </section>
</body>
