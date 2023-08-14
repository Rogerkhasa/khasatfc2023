<?php
    session_start();
    if(isset($_SESSION['id'])){

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/aide.css">
    <title>Aide</title>
</head>
<body>
<section class="navigation">
    <div class="toggle">
        <span></span>
    </div>
   <div class="choix" id="choix">
              
                    <a href=<?php echo "menu_principal.php?id=".$_SESSION['id'] ?> ><img src="img/home.png" alt=""> Accueil</a>
                    <a href="#"><img src="img/note.png" alt="">information</a>
                    <a href="liste_electoral.php" class="line"><img src="img/liste.png" alt="">Liste électorales</a>
                    <a href="resultat.php"><img src="img/resultat.png" alt="">Résultats</a>
                    <a href="aide.php"><img src="img/aide.png" alt="">Aide</a>
                    <?php echo'<a href="deconnexion.php"><img src="img/deconnexion.png" alt="">Déconnexion</a>';?>
             
           </div>
   </section><br>
    <div class="content-aide">

        <div class="information">

        </div>
        
        <div class="liste-electoral">
            <center><h4>Pour afficher les listes de tous les candidats disponibles cliquez sur <span class="couleur">Liste electoral</span></h4></center>
            <img src="img/aide_liste1.png" alt="">
            <center><h4>Et vous voilà dans la page de la liste totale</h4></center>
            <img src="img/aide_liste.gif" alt="">
        </div>
        
        <div class="vote">
            <center><h4>Pour passer au bureau de vote cliquez sur <span class="couleur">Bureau de vote</span></h4></center>
            <img src="img/clicvote.png" alt="">
            <center><h4>Ensuite faites le choix de votre candidat en cliquant sur le bouton qui contient son nom et numéro</h4></center>
            <img src="img/vote.gif" alt="">
            <center><h4>Cette page vous fait le resumé de vos choix avnt de le confirmer ou de l'annuler</h4></center>
            <img src="img/res1.gif" alt="">
        </div>

        <div class="resultat">
            <center><h4>Pour visualiser les resultats disponible cliquez sur <span class="couleur">Résultats</span></h4></center>
            <img src="img/resultat1.png" alt="">
            <center><h4>Ici s'afficher les resultats disponibles (provisoire)</h4></center>
            <img src="img/R.png" alt="">
        </div>

    </div>
    <script src="js/menu.js"></script>
</body>
</html>

<?php
    } else{
        header('location:deconnexion.php');
    }
?>