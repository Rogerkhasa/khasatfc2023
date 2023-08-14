<?php
session_start();
    include("bdd_conn.php");
    $id_pre = $_SESSION['id_pre'];
    $id_nat = $_SESSION['id_nat'];
    $id_pro = $_SESSION['id_pro'];

    $nom_pre = $_SESSION["nom_pre"];
    $nom_nat = $_SESSION["nom_nat"];
    $nom_pro = $_SESSION["nom_pro"];

    $id=$_SESSION['id'];
    // vote pour president
     $votepre= $bdd->prepare("INSERT INTO vote_president (id,voies,nom_pre) VALUES (?,?,?)");
     $votepre->execute(array($id_pre,1,$nom_pre));

    // vote pour depute national
     $votenat= $bdd->prepare("INSERT INTO vote_national (id,voies,nom_nat) VALUES (?,?,?)");
     $votenat->execute(array($id_nat,1,$nom_nat));

     // vote pour depute provincial
     $votepro= $bdd->prepare("INSERT INTO vote_provincial (id,voies,nom_pro) VALUES (?,?,?)");
     $votepro->execute(array($id_pro,1,$nom_pro));
    
     $mofielecteur=$bdd->query("UPDATE `electeurs` SET `voter` = '1' WHERE `electeurs`.`id` = $id");

    //  echo   $id_pre.$id_nat. $id_pro;

        header("location:menu_principal.php?id=".$_SESSION['id']);
    
   
?>
