<?php
session_start();
include("../bdd_conn.php");
if (isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="../style/menu_admin.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
   
<section class="navigation">
   <div class="choix">
   <h3>ADMINISTRATION</h3>
                <a href="menu_admin.php"><img src="../img/home.png" alt="">Accueil</a>
                <a href="candidat_president.php"><img src="../img/candidat.png" alt="">Candidats presidentiels</a>
                <a href="candidat_national.php"><img src="../img/candidat.png" alt=""> Candidats deputé national</a>
                <a href="candidat_provincial.php" class="line"><img src="../img/candidat.png" alt=""> Candidats deputé provincial</a>
                <a href="enroler_electeur.php"><img src="../img/plus.png" alt=""> Enregistrement electeur</a>
                <a href="liste_electoral.php"><img src="../img/candidat.png" alt="">Liste électoral</a>
                <a href="liste_electeur.php"><img src="../img/candidat.png" alt="">Liste d'électeur</a>
                <a href="enregistrement.php"><img src="../img/admin.png" alt="">Ajouter admin</a>
                <a href="deconnexion.php"><img src="../img/deconnexion.png" alt="">Déconnexion</a>
           </div>
   </section>
        
</body>
</html>
<?php } 
else{
    header('location:deconnexion.php');
}
?>