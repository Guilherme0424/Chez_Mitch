<section id="section" class="active">
     <div class="head">
         <h1>Notre brasserie</h1>
     </div>
     <div class="intro">
         <div class="mitchstory">
             <h2>L’histoire Chez Mitch</h2>
             <p>Vous vous demandez sûrement qui est Mitch ? Mitch est un jeune
                 homme de 63 ans,c’est un passionné de surf depuis son voyage
                 en California en 82.
                 Après un long moment à dominer les vagues, Mitch a décidé de
                 cesser son activité et de revenir à son oasis d’origine: la Bretagne,
                 en apportant planche et souvenirs.
                 “Chez Mitch” est une brasserie de bord de mer à l’image chill et
                 amicale, qui souhaite retranscrire un moment de partage sans
                 prise de tête !
                 La bière, conviviale et apéritive est la boisson idéale pour
                 partager un moment agréable.
                 Alors, si vous souhaitez juste faire un break, vous poser, et vous
                 éloigner du quotidien : rendez-vous chez Mitch !</p>
         </div>
         <img class="patateimage" src="" alt="">
         <div class="ekip">
             <h2>L’équipe</h2>
             <p>Nous sommes fiers de présenter les personnes qui se cachent
                 derrière la marque Chez Mitch.

                 Nous vous présentons l’équipe de communication et de design,
                 un groupe de passionnés prêts à tout pour Guidés par notre
                 engagement envers l'excellence créative et l'innovation, nous
                 nous efforçons de donner vie à vos idées avec originalité et flair.</p>
         </div>
     </div>
     <div class="Lechefdeprojet">
         <div class="descrp1">
             <h1>Le chef de projet</h1>
             <p>Le chef de projet a pour mission de réaliser la communication interne entre les groupes, leur rappeler les deadlines, faire en sorte qu’ils respectent les attendus et s’adaptent au marché de la bière artisanale</p>
         </div>
         <div class="vague">
             <img src="public/images/Vague Verticale bleu.svg" alt="">
         </div>
         <!-- <img class="gensilu" src="public/images/Chef de projet.png" alt=""> -->
         <?php
            $students = getStudent('chef', $pdo);
            foreach ($students as $student) :
            ?>
             <img class="gensilu" src="public/images/<?= $student['image_equipe'] ?>" alt="">


         <?php endforeach ?>
         <p class="comp">Compétences :
             dire des choses réels et drôle pour dynamiser</p>
     </div>
     <div class="Lescommunitymanager">
         <div class="descrp2">
             <h1>Les community manager</h1>
             <p>Nos community manager ont pour objectif de vous communiquer les informations importantes (des événements, concours, promo) sur les différents canaux de communication.</p>
         </div>
         <img src="public/images/Vague Verticale rose.svg" alt="">
         <div>
             <!-- <img class="gensilu" id="lili" src="public/images/Lilirose.png" alt="">
             <img class="gensilu" id="lisa" src="public/images/lisa.png" alt=""> -->
             <?php
                $students = getStudent('community_manager', $pdo);
                foreach ($students as $student) :
                ?>
                 <img class="gensilu" id="<?= str_replace(' ', '', $student['Prenom']); ?>" src="public/images/<?= $student['image_equipe'] ?>" alt="">
             <?php endforeach ?>
         </div>
         <p class="comp">Compétences :
             dire des choses réels et drôle pour dynamiser</p>
     </div>
     <div class="Lesdévloppeurs">
         <div class="descrp3">
             <h1>Les dévloppeurs</h1>
             <p>Les designers vont s’occuper de l’identité visuelle de la marque. Cela inclus la création du logo, de la charte graphique, des assets mais aussi de la création de ce site web.</p>
         </div>
         <img src="public/images/Vague Verticale jaune.svg" alt="">
         <div>
            <!-- <img class="gensilu" id="guigui" src="public/images/Guigui.png" alt="">
             <img class="gensilu" id="sey" src="public/images/Sey.png" alt="">
             <img class="gensilu" id="nath" src="public/images/Nath.png" alt=""> -->
             <?php
                $students = getStudent('dev', $pdo);
                foreach ($students as $student) :
                ?>
                 <img class="gensilu" id="<?= str_replace(' ', '', $student['Prenom']); ?>" src="public/images/<?= $student['image_equipe'] ?>" alt="">
             <?php endforeach ?>
         </div>
         <p class="comp">Compétences :
             dire des choses réels et drôle pour dynamiser</p>
     </div>
     <div class="Nossuperbesbrasseurs">
         <div class="descrp4">
             <h1>Nos superbes brasseurs</h1>
             <p>Du choix des ingrédients au brassage et à la mise en bouteille, nos brasseurs ont réalisé le produit de A à Z.</p>
         </div>
         <img src="public/images/Vague Verticale verte.svg" alt="">
         <div>
            <!-- <img class="gensilu" id="dimitri" src="public/images/Dimitri.png" alt="">
             <img class="gensilu" id="noélie" src="public/images/Noélie.png" alt="">
             <img class="gensilu" id="pierre" src="public/images/Pierre.png" alt=""> -->
             <?php
                $students = getStudent('gb', $pdo);
                foreach ($students as $student) :
                ?>
                 <img class="gensilu" id="<?= str_replace(' ', '', $student['Prenom']); ?>" src="public/images/<?= $student['image_equipe'] ?>" alt="">
             <?php endforeach ?>
         </div>
         <p class="comp">Compétences :
             dire des choses réels et drôle pour dynamiser</p>
     </div>
 </section>