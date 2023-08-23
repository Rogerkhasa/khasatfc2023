<?php
session_start();
include("../bdd_conn.php");
if (isset($_SESSION['id'])){


if((isset($_FILES['image'])) AND (!empty($_FILES['image'])) AND (!empty($_POST['nom'])) 
 AND (!empty($_POST['postnom'])  AND (!empty($_POST['prenom'])))  AND (!empty($_POST['sexe']))){
    
    $nom=$_POST['nom'];
    $postnom=$_POST['postnom'];
    $prenom=$_POST['prenom'];
    $sexe=$_POST['sexe'];
    $voies=0;
    $errors=null;
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
  
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"../images_provinciaux/".$file_name);
       $lien_photo=("./images_provinciaux/".$file_name);
       $savephoto = $bdd->prepare("INSERT INTO depute_provincial (nom,postnom,prenom,sexe,voies,photo) VALUES (?,?,?,?,?,?)");
       $savephoto->execute(array($nom, $postnom,$prenom, $sexe,$voies,$lien_photo));
       $ok= "Success";
    }else{
      $errors;
    }
 } else{
   $error="veuillez complèter tous les champs";
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>candidature</title>
    <link rel="stylesheet" href="../style/menu_admin.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>

<section class="navigation">
   <div class="choix">
   <h3>ADMINISTRATION</h3>
                <a href="menu_admin.php"><img src="../img/home.png" alt="">Accueil</a>
                <a href="candidat_president.php"><img src="../img/candidat.png" alt="">Candidats presidentiels</a>
                <a href="candidat_national.php"><img src="../img/candidat.png" alt=""> Candidats deputé national</a>
                <a href="candidat_provincial.php" class="line"><img src="../img/candidat.png" alt=""> Candidats deputé provincial</a>
                <a href="enroler_electeur.php"><img src="../img/plus.png" alt=""> Enregistrement electeur</a>
                <a href="liste_electoral.php"><img src="../img/candidat.png" alt="">Liste électoral</a>
                <a href="liste_electeur.php"><img src="../img/candidat.png" alt="">Liste d'électeur</a>
                <a href="enregistrement.php"><img src="../img/admin.png" alt="">Ajouter admin</a>
                <?php echo'<a href="deconnexion.php"><img src="../img/deconnexion.png" alt="">Déconnexion</a>';?>
           </div>
   </section>




       <div class="container">
         <form action="" method="POST" enctype="multipart/form-data">
         <marquee behavior="" direction="left"><center><h3>AJOUTER LES CANDIDATS DE DEPUTATION PROVINCIAL</h3></center></marquee>
                <div class="row">
                  <?php if (isset($error)) { ?>
                        <?= '<div class="col-md-8 col-md-offset-2 alert alert-danger">'
                        .$error.'</div>';
                        ?>
                  <?php } ?>
                  <?php if (isset($ok)) { ?>
                        <?= '<div class="col-md-8 col-md-offset-2 alert alert-success">'
                        .$ok.'</div>';
                        ?>
                  <?php } ?>
                  <div class="col-md-4 col-md-offset-2">
                     <label for="nom">Nom Candidat</label><br>
                     <input type="text" name="nom" id="nom" placeholder="saisissez le nom " class="form-control"><br>
                     <label for="postnom">Postnom Candidat</label><br>
                     <input type="text" name="postnom" id="postnom" placeholder="saisissez le nom " class="form-control"><br>
                     <label for="prenom">Prenom Candidat</label><br>
                     <input type="text" name="prenom" id="prenom" placeholder="saisissez le nom " class="form-control"><br>
                  </div>
                  
                  <div class="col-md-4 col-md-offset-1">
                     <label for="sexe">Sexe Candidat</label><br>
                     <select name="sexe" id="sexe" class="form-control">
                              <option value="M">Masculin</option>
                              <option value="F">Feminin</option>
                     </select><br>
                     <label for="image">Photo Candidat</label><br>
                     <input type="file" name="image" id="image" class="form-control"><br>
                     <input type="submit" name="envoie" class="form-control btn btn-primary"><br><br>
                  </div>
               </div>
                  
         </form>
       </div>
</body>
</html>
<?php } 
else{
    header('location:deconnexion.php');
}
?>