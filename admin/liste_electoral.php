<?php
session_start();
include("../bdd_conn.php");
if (isset($_SESSION['id'])){
    require '../bdd_conn.php';
    $president = $bdd->query("SELECT * FROM presidentielle");
    $nat = $bdd->query("SELECT * FROM depute_national");
    $pro = $bdd->query("SELECT * FROM depute_provincial");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste electorale</title>
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
        
       

        <div class="affichage">
        <font>les candidats présidentiels</font>
            <table>
           
                <th>id</th>
                <th>Nom</th>
                <th>Postnom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Photo</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                <?php
                    while($aff_pre = $president->fetch()){
                        echo'
                            <tr>
                                <td>'.$aff_pre['id'].'</td>
                                <td>'.$aff_pre['nom'].'</td>
                                <td>'.$aff_pre['postnom'].'</td>
                                <td>'.$aff_pre['prenom'].'</td>
                                <td>'.$aff_pre['sexe'].'</td>
                                <td><img src="../'.$aff_pre['photo'].'" width="50px"></td>
                                <td><a href="modifier.php?id='.$aff_pre['id'].'"><img src="../img/modifier.png" width="20px"></a></td>
                                <td><a href="supprimer.php?id='.$aff_pre['id'].'"><img src="../img/supprimer.png" width="20px"></a></td>
                            </tr>
                        ';
                    }
                ?>
            </table>
        </div>


        <div class="affichage1">
        <font>les candidats deputés nationaux</font>
            <table>
           
                <th>id</th>
                <th>Nom</th>
                <th>Postnom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Photo</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                <?php
                    while($aff_nat = $nat->fetch()){
                        echo'
                            <tr>
                                <td>'.$aff_nat['id'].'</td>
                                <td>'.$aff_nat['nom'].'</td>
                                <td>'.$aff_nat['postnom'].'</td>
                                <td>'.$aff_nat['prenom'].'</td>
                                <td>'.$aff_nat['sexe'].'</td>
                                <td><img src="../'.$aff_nat['photo'].'" width="50px"></td>
                                <td><a href="modnat.php?id='.$aff_nat['id'].'"><img src="../img/modifier.png" width="20px"></a></td>
                                <td><a href="suppnat.php?id='.$aff_nat['id'].'"><img src="../img/supprimer.png" width="20px"></a></td>
                            </tr>
                        ';
                    }
                ?>
            </table>
        </div>


        <div class="affichage2">
        <font>les candidats deputés provinciaux</font>
            <table>
           
                <th>id</th>
                <th>Nom</th>
                <th>Postnom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Photo</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                <?php
                    while($aff_pro = $pro->fetch()){
                        echo'
                            <tr>
                                <td>'.$aff_pro['id'].'</td>
                                <td>'.$aff_pro['nom'].'</td>
                                <td>'.$aff_pro['postnom'].'</td>
                                <td>'.$aff_pro['prenom'].'</td>
                                <td>'.$aff_pro['sexe'].'</td>
                                <td><img src="../'.$aff_pro['photo'].'" width="50px"></td>
                                <td><a href="modpro.php?id='.$aff_pro['id'].'"><img src="../img/modifier.png" width="20px"></a></td>
                                <td><a href="supppro.php?id='.$aff_pro['id'].'"><img src="../img/supprimer.png" width="20px"></a></td>
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