<?php
    include('bdd_conn.php');
    if(isset($_POST['save'])){
        $nom = htmlspecialchars($_POST['nom']);
        $postnom = htmlspecialchars($_POST['postnom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $sexe = $_POST['sexe'];
        $lieunaiss = htmlspecialchars($_POST['lieunaiss']);
        $datenaiss = $_POST['datenaiss'];
        $adresse = htmlspecialchars($_POST['adresse']);
        $origine = htmlspecialchars($_POST['origine']);
        $nompere = htmlspecialchars($_POST['nompere']);
        $nommere = htmlspecialchars($_POST['nommere']);
        $numnat = htmlspecialchars($_POST['numnat']);
        if(!empty($nom) && !empty($postnom) && !empty($prenom) && !empty($sexe) && !empty($lieunaiss) && !empty($datenaiss) && !empty($adresse) && !empty($origine) && 
        !empty($nompere) && !empty($nommere) && !empty($numnat)){
           $ajout = $bdd->query("INSERT INTO electeurs (nom,postnom,prenom,sexe,lieunaissance,datedenaissance,adresse,origine,nompere,nomere,nn)
            VALUES ('$nom','$postnom','$prenom','$sexe','$lieunaiss','$datenaiss','$adresse','$origine','$nompere','$nommere','$numnat')");
            header('location:enroler_electeur.php');
        } else{
            print('vide');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style/enroler.css">
    <title>Enregistrement des électeurs</title>
</head>
<body>
   <nav>
        <label class="titre">ENREGISTRER ELECTEUR</label>  
   </nav>

    <div class="container">

        <div class="row">

            <div class="col-md-12 partie1">
                <form action="" method="POST">

                        <div class="lesnoms col-md-4">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" placeholder="Le nom de la personne" required class="form-control">
                            <label for="postnom">Post-nom</label>
                            <input type="text" name="postnom" id="postnom" placeholder="Le post-nom de la personne" required class="form-control">
                            <label for="prenom">Prenom</label>
                            <input type="text" name="prenom" id="prenom" placeholder="Le prenom de la personne" required class="form-control">
                        </div>

                        <div class="sexeetnaiss col-md-4">
                            <label for="sexe">Sexe</label>
                            <select name="sexe" id="sexe" class="form-control">
                                <option value="M">Masculin</option>
                                <option value="F">Féminin</option>
                            </select>
                            <label for="lieunaiss">Lieu de naissance</label>
                            <input type="text" name="lieunaiss" id="lieunaiss" placeholder="Le lieu de naissance de la personne" required class="form-control">
                            <label for="datenaiss">Date de naissance</label>
                            <input type="date" name="datenaiss" id="datenaiss" required class="form-control">
                            <label for="adresse">Adresse</label>
                            <textarea name="adresse" id="adresse" cols="30" rows="5" placeholder="L'adresse de la personne" required class="form-control"></textarea>
                        </div>

                        <div class="origine col-md-4">
                            <label for="origine">Origine</label>
                            <textarea name="origine" id="origine" cols="30" rows="5" placeholder="L'origine de la personne" required class="form-control"></textarea>
                            <label for="nompere">Nom du père</label>
                            <input type="text" name="nompere" id="nompere" placeholder="Le nom du père de la personne" required class="form-control">
                            <label for="nommere">Nom de la mère</label>
                            <input type="text" name="nommere" id="nommere" placeholder="Le nom de la mère de la personne" required class="form-control">
                        </div>

                        <div class="numnat col-md-4">
                            <label for="numnat">Numéro national</label>
                            <input type="number" name="numnat" id="numnat" placeholder="Le numéro national de la personne" required class="form-control">
                        </div>

                        <div class="btn col-md-2">
                            <input type="submit" value="Enregistrer" class="form-control btn btn-primary" name="save">
                            <input type="reset" value="Annuler" class="form-control btn btn-danger">
                        </div>
                </form>
            </div>

        </div>
        
    </div>
</body>
</html>