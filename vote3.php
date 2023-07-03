<?php
session_start();
    include("bdd_conn.php");
    $_SESSION['id_pro']=$_GET['id_pro'];
    $id_pre = $_SESSION['id_pre'];
    $id_nat = $_SESSION['id_nat'];
    $id_pro = $_SESSION['id_pro'];

    if (isset($_SESSION['id']) && isset($_SESSION['id_pre']) && isset($_SESSION['id_nat']) ) {  

    $affichage = $bdd->prepare("SELECT id,nom,prenom,postnom,photo FROM presidentielle WHERE id=$id_pre");
    $affichage->execute(array());

    $affichage_nat = $bdd->prepare("SELECT id,nom,prenom,postnom,photo FROM depute_national WHERE id=$id_nat");
    $affichage_nat->execute(array());
    
    $affichage_pro = $bdd->prepare("SELECT id,nom,prenom,postnom,photo FROM depute_provincial WHERE id=$id_pro");
    $affichage_pro->execute(array());

       
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/vote3.css">
    <title>Document</title>
</head>

<body>
<div class="bande">
     <h3>Ceni Online-Vote</h3>
     <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="logo_ceni3">
    </div>
    <section class="photo">
    <section>
        <?php
            ($resultat=$affichage->fetch());
            echo'
            <h3>PRESIDENT</h3>
            <div class="photo-pres">
            <img src="'.$resultat["photo"].'" width="200px" height="200px"> <br>    
            <strong>'.'N°'.$resultat['id'].' '.$resultat["nom"].'
        '.$resultat["postnom"].'
            '.$resultat["prenom"].'
            </strong></div>';
        ?>
    </section>
   
    <section>
    <?php
        ($resultat_nat=$affichage_nat->fetch());
        echo'
        <h3>DEPUTE NATIONAL</h3>
        <div class="photo-pres">
        <img src="'.$resultat_nat["photo"].'" width="200px" height="200px"> <br>    
        <strong>'.'N°'.$resultat_nat['id'].' '.$resultat_nat["nom"].'
    '.$resultat_nat["postnom"].'
        '.$resultat_nat["prenom"].'
        </strong></div>';
    ?>
    </section class="photo">
    
    <section>
        <?php
            ($resultat_pro=$affichage_pro->fetch());
            echo'
            <h3>DEPUTE PROVINCIAL</h3>
            <div class="photo-pres">
            <img src="'.$resultat_pro["photo"].'" width="200px" height="200px"> <br>    
            <strong>'.'N°'.$resultat_pro['id'].' '.$resultat_pro["nom"].'
        '.$resultat_pro["postnom"].'
            '.$resultat_pro["prenom"].'
            </strong></div>';
        ?>
        <br><br>
       <center><a href="confimervote.php" id="bouton"><button style="padding: 10px 20px;background-color: #01619E; color:white;border-radius:10px;">Confirmer votre vote</button></a></center>
       <br><center><a href=<?php echo "menu_principal.php?id=".$_SESSION['id'] ?>  id="bouton"><button style="padding: 10px 20px;background-color: red; color:white;border-radius:10px;">Annuler votre vote</button></a></center>
    </section>
   
    </section>
<marquee behavior="ALTERNATE" direction="left"> 
<img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="bas">
    <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="bas">
    <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="bas">
    <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="bas">
    <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="bas">
    <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="bas">
    <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="bas">
    <img src="img/Logo_CENI-scaled.png" width="400px" alt="logo ceni" class="bas">
</marquee>

</body>
</html>
<?php }

else {
    header("location:deconnexion.php");
}
?>