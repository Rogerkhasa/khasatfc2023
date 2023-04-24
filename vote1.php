<?php
    include("bdd_conn.php");
    $id_pre=$_GET['id_pre'];
    $ajoutvote= $bdd->prepare("INSERT INTO vote_president (id,voies) VALUES (?,?)");
    $ajoutvote->execute(array($id_pre,1));
       header("location:president.php");
?>