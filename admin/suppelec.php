<?php
    require '../bdd_conn.php';
    $id = $_GET['id'];
    $supp = $bdd->query("DELETE FROM electeurs WHERE id=$id");
    header('location:liste_electeur.php');
?>