<?php
session_start();
include("../bdd_conn.php");
if (isset($_SESSION['id'])){
    require '../bdd_conn.php';
    $electeur = $bdd->query("SELECT * FROM electeurs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste d'électeur</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../style/enroler.css">
    <link rel="stylesheet" href="../style/liste_admin.css">
</head>
<body>
<nav>
        <div class="bar"> 
        <a href="menu_admin.php"><img src="../img/home.png" alt="">Accueil</a>
                <a href="candidat_president.php"><img src="../img/candidat.png" alt="">Candidats presidentiels</a>
                <a href="candidat_national.php"><img src="../img/candidat.png" alt=""> Candidats deputé national</a>
                <a href="candidat_provincial.php" class="line"><img src="../img/candidat.png" alt=""> Candidats deputé provincial</a>
                <a href="enroler_electeur.php"><img src="../img/plus.png" alt=""> Enregistrement electeur</a>
                <a href="liste_electoral.php"><img src="../img/candidat.png" alt="">Liste électoral</a>
                <a href="liste_electeur.php"><img src="../img/candidat.png" alt="">Liste d'électeur</a>
                <a href="enregistrement.php"><img src="../img/admin.png" alt="">Ajouter admin</a>
                <?php echo'<a href="deconnexion.php"><img src="../img/deconnexion.png" alt="">Déconnexion</a>';?>
        </div>     
    </nav>
    <font><marquee behavior="" direction="left">ENREGISTREMENT DE L'ELECTEUR</marquee></font>

    <div class="electeur">
    <table>
           
           <th>id</th>
           <th>Nom</th>
           <th>Postnom</th>
           <th>Prenom</th>
           <th>Sexe</th>
           <th>Lieu de naissance</th>
           <th>Date de naissance</th>
           <th>Adresse</th>
           <th>Origine</th>
           <th>Nom du père</th>
           <th>Nom de la mère</th>
           <th>Numéro national</th>
           <th>A voté</th>
           <th>Modifier</th>
           <th>supprimer</th>
           <?php
               while($aff = $electeur->fetch()){
                   echo'
                       <tr>
                           <td>'.$aff['id'].'</td>
                           <td>'.$aff['nom'].'</td>
                           <td>'.$aff['postnom'].'</td>
                           <td>'.$aff['prenom'].'</td>
                           <td>'.$aff['sexe'].'</td>
                           <td>'.$aff['lieunaissance'].'</td>
                           <td>'.$aff['datedenaissance'].'</td>
                           <td>'.$aff['adresse'].'</td>
                           <td>'.$aff['origine'].'</td>
                           <td>'.$aff['nompere'].'</td>
                           <td>'.$aff['nomere'].'</td>
                           <td>'.$aff['nn'].'</td>
                           <td>'.$aff['voter'].'</td>
                           <td><a href="modelec.php?id='.$aff['id'].'"><img src="../img/modifier.png" width="20px"></a></td>
                           <td><a href="suppelec.php?id='.$aff['id'].'"><img src="../img/supprimer.png" width="20px"></a></td>
                       </tr>
                   ';
               }
           ?>
       </table>
    </div>
</body>
</html>
<?php } 
else{
    header('location:deconnexion.php');
}
?>