<?php
session_start();
include("../bdd_conn.php");
if (isset($_SESSION['id'])){
    $id = $_GET['id'];
    $aff = $bdd->query("SELECT * FROM admin_c WHERE id = $id");
    $admin = $aff->fetch();
    if (isset($_POST['enregistrer']))
    {
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $sexe = ($_POST['sexe']);
        $username = htmlspecialchars($_POST['username']);
        $passwo = sha1($_POST['passwo']);
        $passwo2 = sha1($_POST['passwo2']);
        if (!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['sexe']) AND !empty($_POST['username']) AND !empty($_POST['passwo']) AND!empty($_POST['passwo2']))
        {
            if ($passwo == $passwo2)
            {
                $ajout = $bdd->query("UPDATE admin_c SET prenom = '$prenom', nom='$nom',sexe='$sexe',username='$username',mdp='$passwo'");
                header('location:enregistrement.php');
            }
        }
        else
        {
           $erreur = "Tous les champs doivent être complétés";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/enrAdmin.css">
    <title>Enregistrement</title>
</head>
<body>
        
        <div class="enregistrement">
            <?php 
                        if(isset($erreur))
                        {
                            echo  '<font color="red" class="erreur">' .$erreur .'</font>';
                        }
                        if(isset($message))
                        {
                            echo '<font color="blue">' .$message  .'</font>';;
                        }
                    ?>
           
                <form method="POST">
                <center class="titre">Ajouter Administrateur</center><br>
                        <label for="prenom">Prenom</label><br>
                        <input type="text" placeholder="Prenom " name="prenom" id="prenom" value="<?= $admin['prenom'] ?>"><br>
                        <label for="nom">Nom</label><br>
                        <input type="text" placeholder="Nom " name="nom" id="nom" value="<?= $admin['nom'] ?>"><br><br>
                        <label for="sexe">Sexe</label><br>
                        <select name="sexe" id="sexe" value="<?= $admin['sexe'] ?>">
                            <option value="Masculin" name="sexe">Masculin</option>
                            <option value="Feminin" name="sexe">Feminin</option>
                        </select><br><br>
                        <label for="username">Nom utilisateur</label><br>
                        <input type="text" placeholder="nom d'utilisateur" name="username" id="username" value="<?= $admin['username'] ?>"><br>
                        <label for="passwo">Mot de passe</label><br>
                        <input type="password" placeholder="Mot de passe " name="passwo" id="passwo" ><br>
                        <label for="passwo2">Confirmer le mot de passe</label><br>
                        <input type="password" placeholder="Confirmer mot de passe " name="passwo2" id="passwo2" ><br><br>
                        <input type="submit" value="Enregistrer" name="enregistrer" class="enregistrer">
                        
                </form>
        </div>

      

</body>
<?php } 
else{
    header('location:deconnexion.php');
}
?>