<?php
session_start();
include("bdd_conn.php");
if (($_SESSION)) {
$aff=$bdd->query("SELECT * FROM presidentielle");
$affi=$bdd->query("SELECT * FROM depute_national");
$affic=$bdd->query("SELECT * FROM depute_provincial");

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/liste_electoral.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<style>
   
</style>
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
   <center><h1>LISTE DE TOUS LES CANDIDATS</h1></center>
   
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>
</div>

   <div class="affichage">
    <center><h4>les candidats présidentiels</h4></center>

        <table>
            <th style="text-align:center;border-right: 2px solid white;">N°</th>
            <th style="text-align:center;border-right: 2px solid white;">NOM</th>
            <th style="text-align:center;border-right: 2px solid white;">POSTNOM</th>
            <th style="text-align:center;border-right: 2px solid white;">PRENOM</th>
            <th style="text-align:center;border-right: 2px solid white;">SEXE</th>
            <th style="text-align:center;border-right: 2px solid white;">PHOTO</th>
            <?php
                while ($president=$aff->fetch()){
                    echo'
                    <tr>
                    <td>'.$president['id'].'</td>
                    <td>'.$president['nom'].'</td>
                    <td>'.$president['postnom'].'</td>
                    <td>'.$president['prenom'].'</td>
                    <td>'.$president['sexe'].'</td>
                    <td><img src="'.$president['photo'].'" width="40px"></td>
                    <tr>
              
                    ';
                }
            ?>
        </table>
           
        <br><br><br>
        
        <center><h4>les candidats deputés nationaux</h4></center>
        <table>
            <th style="text-align:center;border-right: 2px solid white;">N°</th>
            <th style="text-align:center;border-right: 2px solid white;">NOM</th>
            <th style="text-align:center;border-right: 2px solid white;">POSTNOM</th>
            <th style="text-align:center;border-right: 2px solid white;">PRENOM</th>
            <th style="text-align:center;border-right: 2px solid white;">SEXE</th>
            <th style="text-align:center;border-right: 2px solid white;">PHOTO</th>
            <?php
                while ($national=$affi->fetch()){
                    echo'
                    <tr>
                    <td>'.$national['id'].'</td>
                    <td>'.$national['nom'].'</td>
                    <td>'.$national['postnom'].'</td>
                    <td>'.$national['prenom'].'</td>
                    <td>'.$national['sexe'].'</td>
                    <td><img src="'.$national['photo'].'" width="40px"></td>
                    <tr>
              
                    ';
                }
            ?>
        </table>
        

        <br><br><br>
        
        <center><h4>les candidats deputés provinciaux</h4></center>
        <table>
            <th style="text-align:center;border-right: 2px solid white;">N°</th>
            <th style="text-align:center;border-right: 2px solid white;">NOM</th>
            <th style="text-align:center;border-right: 2px solid white;">POSTNOM</th>
            <th style="text-align:center;border-right: 2px solid white;">PRENOM</th>
            <th style="text-align:center;border-right: 2px solid white;">SEXE</th>
            <th style="text-align:center;border-right: 2px solid white;">PHOTO</th>
            <?php
                while ($provincial=$affic->fetch()){
                    echo'
                    <tr>
                    <td>'.$provincial['id'].'</td>
                    <td>'.$provincial['nom'].'</td>
                    <td>'.$provincial['postnom'].'</td>
                    <td>'.$provincial['prenom'].'</td>
                    <td>'.$provincial['sexe'].'</td>
                    <td><img src="'.$provincial['photo'].'" width="40px"></td>
                    <tr>
              
                    ';
                }
            ?>
        </table><br><br>
   </div>
   <script src="js/menu.js"></script>
</body>
</html>

<?php 
} else
{
    header('location:deconnexion.php');
}
?>