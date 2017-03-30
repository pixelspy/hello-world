<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Curriculum vitae</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="screens.css">
  <link media="print" rel="stylesheet" href="print.css">
</head>
<body>

  <main class="page container">
    <header class="header-body row">
      <section class="about row ">
        <img class="photo-portrait col-xs-2" src="cvprofile.png" alt="mahana portrait">
        <section class="text-searching col-xs-5">
          <h1 class="nom-logo">MAHANA DELACOUR</h1>
          <h2 class="titre-nom">Développeuse Web Junior</h2>
          <h2 class="titre-nom">Conceptrice Visuelle</h2>
          <p>J'espère pouvoir apporter mes compétences de graphiste et scénographe aux métiers du numérique. Je suis à la recherche d'un stage et d'un contrat pro en tant que UI/UX et web designer.</p>
          </section>

          <dl class= "coordAll col-xs-5 row ">
            <?php
            $values = array(
              "Adresse : " => "Paris",
              "Tél : " => "0695441314",
              "Email : " => "mahana.delacour@gmail.com",
              "Blog : " => "digitruk.wordpress.com",
              "GitHub : " => "github.com/pixelspy",
              "Linkdln : " => "/mahana-delacour"
            );
            foreach ($values as $key => $value)
            {
              echo '<dt class="title-coord col-xs-6">' . $key . '</dt>';
              echo '<dd class="details-coord col-xs-6">' . $value . '</dd>';
            }?>
          </dl>
        </section>
      </header>

      <section class="experiences row">
        <h1>Experiences</h1>
        <div class="iconContainer">

        <img class="icone" src="exp2.png" alt="icone">
      </div>
        <dl>
          <?php
          //tableau associatif ou tableau de tableau
          $experiences = array(
            array(
              'date' => '2017',
              'titre' => 'Hackaton, Fondation Orange - Graphiste et développeuse web junior',
              'description' => 'Participation avec deux groupes gagnants.'
            ),
            array(
              'date' => '2016-2017',
              'titre' => 'Ateliers Hour of Code - Animatrice (en cours)',
              'description' => 'Initiation au code et autres outils du numérique.'
            ),
            array(
              'date' => '2016',
              'titre' => 'Opera Orchestre National Montpellier • Conceptrice, créatrice (3mois)',
              'description' => 'Experience intéractive - langage C#.'
            ),
            array(
              'date' => '2016',
              'titre' => 'Futur En Seine, Paris • Conceptrice, créatrice (2mois)',
              'description' => 'Expositions: Experience intéractive - langage C#'
            ),
            array(
              'date' => '2016',
              'titre' => 'Festival d\'Aix • Artiste invitée (1mois)',
              'description' => 'Résidence Création Opéra, European Network Opera Academy'
            ),
            array(
              'date' => '2010-2017',
              'titre' => 'Bénévolat - Tutrice périscolaire',
              'description' => 'Soutien pour enfants avec des difficultés d\'apprentissage et de comportement,
              en groupe et en entretien individuel. (en cours)'
            )
          );
          foreach ($experiences as $key){
            echo '<dt class="col-xs-2">' . $key['date'] . '</dt>';
            echo '<div class="col-xs-10"><dd class="titles">' . $key['titre'] . '</dd>';
            echo '<p>' . $key['description'] . '</p></div>';
          }?>
        </dl>
      </section>

      <section class="skills row">
        <h1>Compétences</h1>
        <div class="iconContainer">
          <img class="icone" src="skills2.png" alt="icone">
        </div>
        <ul class="col-xs-12">

<?php
$skills = array(
 "Conception Design" => "xxxxxx",
 "Graphisme" => "xxxxx",
 "Production Vidéo" => "xxxxx",
 "HTML/CSS" => "xxxxx",
 "Javascript" => "xxx",
 "PHP" => "xxx"
);
foreach ($skills as $key => $value){
  echo "<li>" . $key . " : " . $value . "</li>";
} ?>
        </ul>
      </section>

      <section class="hobbies row">
        <h1>Loisirs</h1>
        <img class="icone" src="" alt="icone">
        <dl class="row">
          <?php
          $hobbies = array(
            array(
              'hobbie' => 'Internet',
              'detailsHobb' => 'Blog de veille: digitruk.wordpress.com. <br>
              Sujets d\'intéret: <br>
              astuces de programmation, <br>
              évènements culturels /art numérique.'
            ),
            array(
              'hobbie' => 'Photographie',
              'detailsHobb' => 'Canon D4 <br>
              Objectifs: <br>Zoom 14-24mm, Zoom 70-300mm, <br>Nikkor 105mm, Nikkor 24mm.'
            )
          );
          foreach ($hobbies as $key){
            echo '<dt class="col-xs-2">' . $key['hobbie'] . '</dt>';
            echo '<dd class="col-xs-4">' . $key['detailsHobb'] . '</dd>';
          }?>

          </dl>

        <dl class="row">
          <?php
          $hobbies2 = array(
            array(
              'hobbie' => 'Animation',
              'detailsHobb' => 'Suite Adobe: Photoshop, Illustrator, InDesign, After Effect - technique 2D et rotoscopie'
            ),
            array(
              'hobbie' => 'Sérigraphie',
              'detailsHobb' => 'Impression sur papier et tissus.<br> Atelier partagé, Mairie de Paris'
            )
          );
          foreach ($hobbies2 as $key){
            echo '<dt class="col-xs-2">' . $key['hobbie'] . '</dt>';
            echo '<dd class="col-xs-4">' . $key['detailsHobb'] . '</dd>';
          }
          ?>

        </dl>
      </section>

      <section class="education row">
        <h1>Formations</h1>
        <img class="icone" src="" alt="icone">
        <dl>
          <?php
          $education = array(
            array(
              'date' => '2016 - 2017',
              'titleEd' => 'Simplon.co • Paris 20',
              'detailEd' => 'Formation longue: développeur.se web junior, spéc. PHP'
            ),
            array(
              'date' => '2009 - 2014',
              'titleEd' => 'Central Saint Martin\'s School of Art and Design •  Londres',
              'detailEd' => 'License et Master Arts, mention design, parcours scénographie'
            )
          );
          foreach ($education as $key){
            echo '<dt class="col-xs-2">' . $key['date'] . '</dt>';
            echo '<div  class="col-xs-10"><dd class="titles">' . $key['titleEd'] . '</dd><p>' . $key['detailEd'] . '</p></div>';
          } ?>
        </dl>
      </section>

      <footer>
      </footer>
    </main>
  </body>
  </html>
