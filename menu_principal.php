<?php
session_start();
require("bdd_conn.php");
$affichage = $bdd->prepare("SELECT id,nom,prenom,postnom,sexe FROM electeurs");
  $affichage->execute(array());
  ($resultat=$affichage->fetch());
  $_SESSION['id_profil']=$resultat['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/menu_principal.css">
    <title>Document</title>
</head>
<body>
    <section class="tete">
                    <nav>
                           <ul>
                                <h3>Ceni Online-Vote</h3>
                                <li><img src="img/home.png" alt=""><a href="#">Accueil</a></li>
                                <li><img src="img/aide.png" alt=""><a href="#">Aide</a></li>
                                <li><img src="img/note.png" alt=""><a href="#">Note d'information</a></li>
                                <li><img src="img/liste.png" alt=""><a href="#">Liste électorales</a></li>
                                <li><img src="img/vote.png" alt=""><a href="president.php">Bureau de vote</a></li>
                                <li><img src="img/candidat.png" alt=""><a href="#">Liste de candidats</a></li>
                                <li><img src="img/urnes.png" alt=""><a href="#">Vérifier les urnes</a></li>
                                <li><img src="img/resultat.png" alt=""><a href="#">Résultats</a></li>
                                <li><img src="img/deconnexion.png" alt=""><a href="#">Déconnexion</a></li>
                           </ul>
                    </nav>
            </div>  
    </section>
    <div class="bienvenu">
        <?php if ($resultat['sexe']=='M') { ?>
        <p>Bienvenue monsieur<strong><?= ' '.$resultat['nom'].' '.$resultat['postnom'].' '.$resultat['prenom'].' ';?></strong>au vote</p>
        <?php } ?>

        <?php if ($resultat['sexe']=='F') { ?>
        <p>Bienvenue madame<strong><?= ' '.$resultat['nom'].' '.$resultat['postnom'].' '.$resultat['prenom'].' ';?></strong>au vote</p>
        <?php } ?>
    </div>
    <section class="corps">
        <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="logo_ceni">
        
           <div class="choix">
                <a href="#"><img src="img/home.png" alt="">Accueil</a>
                <a href="#"><img src="img/aide.png" alt="">Aide</a>
                <a href="#"><img src="img/note.png" alt="">Note d'information</a>
                <a href="#"><img src="img/liste.png" alt="">Liste électorales</a>
                <a href="president.php"><img src="img/vote.png" alt="">Bureau de vote</a>
                <a href="#"><img src="img/candidat.png" alt="">Liste de candidats</a>
                <a href="#"><img src="img/urnes.png" alt="">Vérifier les urnes</a>
                <a href="#"><img src="img/resultat.png" alt="">Résultats</a>
                <?php echo'<a href="deconnexion.php"><img src="img/deconnexion.png" alt="">Déconnexion</a>';?>
           </div>
    
    </section>

</body>
</html>