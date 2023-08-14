<?php
    require '../bdd_conn.php';
    $id = $_GET['id'];
    $supp = $bdd->query("DELETE FROM depute_national WHERE id =$id");
    header('location:liste_electoral.php');
?>