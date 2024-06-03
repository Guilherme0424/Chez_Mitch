<?php
session_start();

$page_title = 'Vulgarisation';
$css = 'vulgarisation.css';
ob_start();
include 'app/view/Vulgarisation.view.php';
$content = ob_get_clean();

<<<<<<< HEAD
include 'app/view/common/layout.php';
=======
<body>
    <header>
        <img class="logo" src="public/images/Mitch noir (1).png" alt="">
        <img class="Panier" src="public/images/Panier.png" alt="">
        <nav id="nav" class="active">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Bières</a></li>
                <li><a href="#">Notre brasserie</a></li>
                <li><a href="#">Vulgarisation</a></li>
                <li><a href="#">Avis</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div id="icons" class="active"></div>
        </nav>
        <script src="public/js/Vulgarisation.js"></script>
    </header>
    <main>
        <section id="section" class="active">
            <div class="cbeige">
                <h1>LA VULGARISATION</h1>
                <p>Notre projet consiste à réaliser une bière de A à Z.
                    Nous sommes donc passé par toutes les étapes de création d'une bière, du choix des ingrédients
                    jusqu'à la mise en bouteille. Une fois cette étape finie, nous l'avons analysé afin de savoir toutes
                    les informations nécessaire à notre création (teneur en alcool, en sucre, ou encore en CO2).
                    Les enjeux autour de ce projet sont nombreux: savoir si la bière possède bien les caractéristiques
                    que nous voulions mais aussi en savoir plus sur l'impact écologique lié à la production de bière,
                    ainsi que connaitre les risques liés à l'alcool.</p>
            </div>
            <div class="vgris"><img class="v" src="public/images/Vague grise.svg" alt=""></div>
            <div class="vrose"><img class="v" src="public/images/Vague rose.svg" alt="">

                <div class="malt">
                    <div class="pilsen"><img src="public/images/pilsen" alt="">
                        <div class="txtpilsen">
                            <h3>Pilsen</h3>
                            <p>Pilsen Légèreté et une amertume du houblon (traditionnellement du Saaz) qui ressort de par une base maltée légère, le malt de base par excellence.</p>
                        </div>
                    </div>
                    <div class="paleale"><img src="public/images/pale ale" alt="">
                        <div class="txtpaleale">
                            <h3>Pale Âle</h3>
                            <p>Est assez douce avec une pointe d'amertume apportée par les houblons Le Malt de base par excellence, malt relativement neutre.</p>
                        </div>
                    </div>
                    <div class="avoine"><img src="public/images/avoine" alt="">
                        <div class="txtavoine">
                            <h3>Flocon d’Avoine</h3>
                            <p>Son goût de noisette se prête à diverses variations.</p>
                        </div>
                    </div>
                    <div class="carahell"><img src="public/images/carahell" alt="">
                        <div class="txtcarahell">
                            <h3>Carahell</h3>
                            <p>caramélisé très léger, apporte un beau doré à notre bières blondes et présente des arômes ronds, une mousse crémeuse, une saveur maltée sucrée et de douces notes de caramel biscuité.</p>
                        </div>
                    </div>
                </div>
                <h3>Malt</h3>
                <div class="houbl">
                    <div class="saaz"><img src="public/images/saaz" alt="">
                        <div class="txtsaaz">
                            <h3>Saaz</h3>
                            <p>Goût et arôme doux, légèrement épicé et subtil. Pas idéal pour amériser une bière. pur houblon aromatique qui donnera des notes uniques florale, poivrées voire mentholée.</p>
                        </div>
                    </div>
                    <div class="hallertau"><img src="public/images/hallertau" alt="">
                        <div class="txthallertau">
                            <h3>Hallertau Blanc</h3>
                            <p>Sa saveur est dite fruitée, avec des notes vineuses de groseille et d'herbe. Il présente également un profil aromatique complexe avec des notes de cassis, de raisin, de pamplemousse ou encore de fleur de sureau.</p>
                        </div>
                    </div>
                    <div class="brawersgold"><img src="public/images/brawers gold" alt="">
                        <div class="txtbrawersgold">
                            <h3>Brewers Gold</h3>
                            <p>Arômes légers de fruits et épices aux bières à haute fermentation, amérisant,
                                donne une amertume balancée et tardive</p>
                        </div>
                    </div>
                </div>
                <h3>Houblons</h3>
                <h3>Notre bière se compose de :</h3>
                <div class="Iluingredient">

                    <img src="public/images/ilu Ingrédient" alt="">

                </div>
                <h1>Les ingrédients</h1>

            </div>
            <div class="vbleu">
                <img class="v" src="public/images/Vague bleu.svg" alt="">

                <div class="Brassage">
                    <div class="Concassage">
                        <h2>Etape 1:Concassage</h2>
                        <p>Le concassage du malt est une étape essentielle dans le processus de brassage à partir de
                            grains
                            entiers. Il implique de broyer l'écorce des céréales maltées pour faciliter l'accès des
                            enzymes
                            à l'amidon. Cette action permet la conversion et l'extraction efficace du sucre lors de
                            l'empâtage.
                            L'étape du concassage consiste à broyer les grains de manière suffisamment fine pour
                            favoriser
                            l'action enzymatique, mais pas trop, afin de ne pas obtenir une farine qui rendrait
                            difficile la
                            filtration du moût.</p>
                    </div>
                    <img class="Concilu" src="" alt="">
                    <div class="Empatage">
                        <h2>Étape 2 : Empâtage</h2>
                        <p>L'empâtage est l'étape la plus importante du brassage. Elle consiste à tremper dans de l'eau
                            chaude et à remuer (brasser) le malt concassé dans une cuve d'empâtage afin de procéder à
                            l'extraction de l'amidon contenu dans le malt.</p>
                    </div>
                    <img class="Empailu" src="" alt="">
                    <div class="Filtra">
                        <h2>Étape 3 : Filtration</h2>
                        <p>La filtration consiste à séparer la matière liquide, le “moût” de la matière solide, le
                            “gâteau”, issu de l'empâtage, à l'aide d'un tamis dans une cuve dédiée. Pendant ce
                            processus, le brasseur arrose le gâteau pour extraire tous les sucres résiduels. Cette étape
                            permet également de mesurer la densité du moût afin d'atteindre le taux d'alcool désiré à la
                            fin du brassage.</p>
                    </div>
                    <img class="Filtrailu" src="" alt="">
                    <div class="Ebulli">
                        <h2>Étape 4 : Ebullition</h2>
                        <p>L'ébullition consiste à porter le moût à une température de 100°C pendant environ 80 minutes,
                            ce qui permet d'éliminer les arômes indésirables pouvant être produits par certaines
                            protéines. Pendant cette phase, on ajoute également les houblons, les épices, les fruits
                            frais, les fruits secs et tout autre ingrédient spécifié dans la recette.</p>
                    </div>
                    <img class="Ebulliilu" src="" alt="">
                    <div class="Clarifica">
                        <h2>Étape 5 : La Clarification</h2>
                        <p>tu retires les houblons
                            tu melanges pour centraliser tous les elements en suspension pour ilter facilement les
                            element solides et conserver la biere plus longtemps
                        </p>
                    </div>
                    <img class="Clarificailu" src="" alt="">
                    <div class="Refroidissement">
                        <h2>Étape 6 : Refroidissement</h2>
                        <p> Après l'ébullition, il est nécessaire de refroidir le moût pour pouvoir y ajouter les
                            levures vivantes sans les endommager. Ainsi, la température est réduite d'environ 100°C à
                            environ 20°C à ce stade.</p>
                    </div>
                    <img class="Refroidilu" src="" alt="">
                </div>
                <h1>Le Brassage</h1>


            </div>
            <div class="vorange"><img class="v" src="public/images/Vague orange.svg" alt="">
                <p>Lors de cette étape ont ajoute des levures et conversion des sucres en CO2 et en alcool. Il y a
                    production de centaines de composants impliqués dans les arômes et le goût de la bière. La
                    fermentation dure une dizaine de jours. Durant cette étape on évite un maximum le contact avec la
                    bière afin d’éviter toute modification des caractéristiques de la bière.</p>
                <h1>La Fermentation </h1>
            </div>
            <div class="vjaune"><img class="v" src="public/images/Vague jaune.svg" alt="">
                <p>La période de maturation en cuve permet à certaines bières de développer pleinement leur potentiel
                    avant d'être embouteillées. Ce processus de maturation peut également être effectué en fût, durant
                    des périodes allant de quelques semaines à plusieurs années.</p>
                <h1>La maturation</h1>
            </div>
            <div class="vbeige">
                <p>Tout d’abord, on nettoie le matériel et les contenants. Là encore, le nettoyage des bouteilles est
                    très important pour éviter toute contamination.
                    Peu avant la mise en bouteille, on ajoute du sucre au moût fermenté afin de réactiver les levures.
                    Cette étape permet la création du gaz carbonique et de la mousse.
                    Une période d'affinage de quinze jours en bouteille est nécessaire avant de pouvoir apprécier la
                    bière.</p>
                <h1>ReFermentation en bouteille </h1>
            </div>

        </section>
    </main>
    <footer class="Pied">
        <div class="wave"><img src="public/images/vague Noir.svg" alt=""></div>
        <div class="Infos">
            <ul>
                <h3>Informations</h3>
                <li><a href="#">Qui sommes-nous</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="Liens">
            <ul>
                <h3>Liens utiles</h3>
                <li><a href="#">Mentions légales</a></li>
                <li><a href="#">Politique de confidentialité</a></li>
                <li><a href="#">Support</a></li>
            </ul>
        </div>
        <div class="Contact">
            <ul>
                <h3>Contacts</h3>
                <li><img src="public/images/telephone.png" alt=""><a href="#">+33 01 23 45 67 89</a></li>
                <li><img src="public/images/mail.png" alt=""><a href="#">chezmitch.brasserie@gmail.com</a></li>
                <li><img src="public/images/insta.png" alt=""><a href="#">chez.mitch</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
>>>>>>> parent of 5df7e80 (View c'est ok je crois..)
