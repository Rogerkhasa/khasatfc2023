<?php 
    include('bdd_conn.php');
    session_start();
    if ($_SESSION['id']) {
    $rech = $bdd->query("SELECT * FROM presidentielle");
    $rech1 = $bdd->query("SELECT * FROM depute_national");
    $rech2 = $bdd->query("SELECT * FROM depute_provincial");
    $nbrvote = $bdd->query("SELECT COUNT(id_vote),id FROM vote_president GROUP BY id");
    $nbrvote1 = $bdd->query("SELECT COUNT(id_vote),id FROM vote_national GROUP BY id");
    $nbrvote2 = $bdd->query("SELECT COUNT(id_vote),id FROM vote_provincial GROUP BY id");

   
    // var_dump($result); 
    // echo $result['COUNT(id_vote)'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/resultat.css">
    <title>Resultat</title>
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
    <div class="presidentielle">
       
        <table>
        <h3>RESULTAT PRESIDENTIEL</h3>
            <th style="text-align:center;">N°</th>
            <th style="text-align:center;">Nom,Post-nom,Prenom</th>
            <th style="text-align:center;">Voies</th>
           
        <?php
         while(($aff_pre = $rech->fetch()) AND ($result = $nbrvote->fetch())) {
          
                echo'
                <tr>
                    <td style="text-align:center;">'.$aff_pre['id'].'</td>
                    <td style="text-align:center;">'.$aff_pre['nom'].' '.$aff_pre['postnom'].' '.$aff_pre['prenom'].'</td>
                    <td style="text-align:center;">'.$result['COUNT(id_vote)'].'</td>
                </tr
                
            ';
            }
            
        
        ?>
         </table>
    </div>
<br>


    <div class="national">
       
        <table>
        <h3>RESULTAT NATIONAL</h3>
            <th style="text-align:center;">N°</th>
            <th style="text-align:center;">Nom,Post-nom,Prenom</th>
            <th style="text-align:center;">Voies</th>
           
        <?php
         while(($aff_nat = $rech1->fetch()) AND ($result1 = $nbrvote1->fetch())) {
          
                echo'
                <tr>
                    <td style="text-align:center;">'.$aff_nat['id'].'</td>
                    <td style="text-align:center;">'.$aff_nat['nom'].' '.$aff_nat['postnom'].' '.$aff_nat['prenom'].'</td>
                    <td style="text-align:center;">'.$result1['COUNT(id_vote)'].'</td>
                </tr
                
            ';
            }
            
        
        ?>
         </table>
    </div>



    <div class="provincial">
       
        <table>
        <h3>RESULTAT PROVINCIAL</h3>
            <th style="text-align:center;">N°</th>
            <th style="text-align:center;">Nom,Post-nom,Prenom</th>
            <th style="text-align:center;">Voies</th>
           
        <?php
         while(($aff_pro = $rech2->fetch()) AND ($result2 = $nbrvote2->fetch())) {
          
                echo'
                <tr>
                    <td style="text-align:center;">'.$aff_pro['id'].'</td>
                    <td style="text-align:center;">'.$aff_pro['nom'].' '.$aff_pro['postnom'].' '.$aff_pro['prenom'].'</td>
                    <td style="text-align:center;">'.$result2['COUNT(id_vote)'].'</td>
                </tr
                
            ';
            }
            
        
        ?>
         </table>
    </div>
    <script src="js/menu.js"></script>
</body>
</html>
<?php
    } else{
        header('location:deconnexion.php');
    }
?>