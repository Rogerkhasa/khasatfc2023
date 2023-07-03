<?php 
    include('bdd_conn.php');
    session_start();
    if ($_SESSION['id']) {
    $rech = $bdd->query("SELECT * FROM presidentielle");
    $nbrvote = $bdd->query("SELECT COUNT(id_vote),id FROM vote_president GROUP BY id");
   
    // var_dump($result); 
    // echo $result['COUNT(id_vote)'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
</head>
<body>
    <div class="presidentielle">
        <table>
            <th>N°</th>
            <th>Nom,Post-nom,Prenom</th>
            <th>Voies</th>
           
        <?php
         while(($aff_pre = $rech->fetch()) AND ($result = $nbrvote->fetch())) {
          
                echo'
                <tr>
                    <td>'.$aff_pre['id'].'</td>
                    <td>'.$aff_pre['nom'].' '.$aff_pre['postnom'].' '.$aff_pre['prenom'].'</td>
                    <td>'.$result['COUNT(id_vote)'].'</td>
                </tr
                
            ';
            }
            
        
        ?>
         </table>
    </div>
</body>
</html>
<?php
    } else{
        header('location:deconnexion.php');
    }
?>