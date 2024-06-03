<section id="section" class="active">
    <div class="fondblue">
        <h1>AVIS</h1>
        <div class="bibi">
            <div class="rondo"><img src="public/images/rondorange.svg" alt=""></div>
            <div class="bibilu"><img src="public/images/CaliforniaDream.png" alt=""></div>
            <button class="add" type="button">Ajouter un avis</button>
        </div>
        <div class="addavis">
            <h3>Ajouter un avis : </h3>
            <div class="stars">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <i class="fas fa-star" data-value="<?= $i ?>"></i>
                <?php endfor; ?>
            </div>
        </div>
        <div class="comm">
            <p>Commentaire :</p>
            <textarea class="commarea" placeholder="Écrivez votre avis ici..."></textarea>
        </div>
        <div class="list">
            <p>lol</p>
        </div>
        <div></div>
    </div>
    <div class="vaguebi"><img src="public/images/Vague Sable Bicolor.svg" alt=""></div>
    <script src="public/js/avis.js"></script>
</section>