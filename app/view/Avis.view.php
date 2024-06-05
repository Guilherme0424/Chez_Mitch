<section id="section" class="active">
    <div class="fondblue">
        <h1>AVIS</h1>
        <div class="bibi">
            <div class="rondo"><img src="public/images/rondorange.svg" alt=""></div>
            <div class="bibilu"><img src="public/images/CaliforniaDream.png" alt=""></div>
            <p class="add" type="submit">Bière</p>
        </div>
        <form class="form" action="Avis.php" method="post">
            <div class="addavis">
                <p>Ajouter un avis : </p>
                <div class="stars">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <i class="fas fa-star" data-value="<?= $i ?>"></i>
                    <?php endfor; ?>
                </div>
                <button class="addreview" type="submit"><img src="public/images/boutonenvoyer.png" alt=""></button>
            </div>
            <div class="comm">
                <p>Commentaire :</p>
                <textarea class="commarea" name="commentaire" placeholder="Écrivez votre avis ici..." required></textarea>
            </div>
        </form>
        <div class="list">
            <p>Avis :</p>
            <div class="trait"><img src="public/images/icone-trait-noir.png" alt=""></div>
            <div class="showarea"> </div>
        </div>
    </div>
    <div></div>
    </div>
    <div class="vaguebi"><img src="public/images/Vague Sable Bicolor.svg" alt=""></div>
    <script src="public/js/avis.js"></script>
</section>