<?php
include("bdd_conn.php");
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
   <div class="choix">
                <a href="menu_admin.php"><img src="img/home.png" alt=""> Accueil</a>
                <a href="liste_electoral.php"><img src="img/note.png" alt="">information</a>
                <a href="#" class="line"><img src="img/liste.png" alt="">Liste électorales</a>
                <a href="candidat_provincial.php"><img src="img/candidat.png" alt="">candidats provincialiels</a>
                <a href="candidat_provincial.php"><img src="img/candidat.png" alt=""> candidats deputé provincial</a>
                <a href="candidat_provincial.php" class="line"><img src="img/candidat.png" alt=""> candidats deputé provincial</a>
                <a href="#"><img src="img/urnes.png" alt="">les urnes</a>
                <a href="#"><img src="img/resultat.png" alt="">Résultats</a>
                <a href="#"><img src="img/aide.png" alt="">Aide</a>
                <?php echo'<a href="deconnexion.php"><img src="img/deconnexion.png" alt="">Déconnexion</a>';?>
           </div>
   </section>
   <center><h2>TABLEAU DE BORD</h2></center>
   
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
   <div class="affichage">
    <center><strong><h4>les candidats présidentiels</h4></strong></center>

        <table>
            <th>ID</th>
            <th>NOM</th>
            <th>POSTNOM</th>
            <th>PRENOM</th>
            <th>SEXE</th>
            <th>PHOTO</th>
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
        
        <center><strong><h4>les candidats deputés nationaux</h4></strong></center>
        <table>
        <th>ID</th>
            <th>NOM</th>
            <th>POSTNOM</th>
            <th>PRENOM</th>
            <th>SEXE</th>
            <th>PHOTO</th>
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
        
        <center><strong><h4>les candidats deputés provinciaux</h4></strong></center>
        <table>
        <th>ID</th>
            <th>NOM</th>
            <th>POSTNOM</th>
            <th>PRENOM</th>
            <th>SEXE</th>
            <th>PHOTO</th>
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
</body>
</html>