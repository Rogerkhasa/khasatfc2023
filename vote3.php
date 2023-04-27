<?php
session_start();
    include("bdd_conn.php");
    $_SESSION['id_pro']=$_GET['id_pro'];
    $id_pre = $_SESSION['id_pre'];
    $id_nat = $_SESSION['id_nat'];
    $id_pro = $_SESSION['id_pro'];
    if ((empty($id_pre)) && (empty($id_nat)) && (empty($id_pro))){
    // vote pour president
     $votepre= $bdd->prepare("INSERT INTO vote_president (id,voies) VALUES (?,?)");
     $votepre->execute(array($id_pre,1));

    // vote pour depute national
     $votenat= $bdd->prepare("INSERT INTO vote_national (id,voies) VALUES (?,?)");
     $votenat->execute(array($id_nat,1));

     // vote pour depute provincial
     $votepro= $bdd->prepare("INSERT INTO vote_provincial (id,voies) VALUES (?,?)");
     $votepro->execute(array($id_pro,1));
    
    if (($votenat) && ($votepre) && ($votepro)){
        header("location:deconnexion.php");
    } 
    else{
        
        header("location:deconnexion.php");
        $msg='<script>'.alert("Desolé votre vote n\'est peut pas être accepter").'</script>';
     }
}
 else{
    header("location:deconnexion.php");
    $msg='<script>.alert("Desolé votre vote n\'est peut pas être accepter").</script>';
 }
   
?>
