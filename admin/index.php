<?php
    session_start();
    require '../bdd_conn.php';
    if (isset($_POST['connexion'])){
        $user = $_POST['username'];
        $pass = sha1($_POST['mdp']);
        if(!empty($user) && !empty($pass)){
            $selection = $bdd->query("SELECT * FROM admin_c WHERE username='$user' AND mdp='$pass'");
            if ($selection->rowCount() > 0){
                $vericompte = $selection->fetch();
                if(($vericompte['username'] == $user) && ($vericompte['mdp']==$pass)){
                    $_SESSION['id'] = $vericompte['id'];
                    header('location:menu_admin.php');
                    
                }else{
                    $mgs="veuillez remplir le nom d'utilisateur ou mot de passe incorrect";
                }

            }else{
                $mgs="veuillez remplir le nom d'utilisateur ou mot de passe incorrect";
            }
        }else{
            $mgs="veuillez remplir le nom d'utilisateur ou mot de passe incorrect";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../style/admin.css">
    <title>connexion admin</title>
</head>
<body>
    <div class="container">

           <img src="../img/login.jpeg" alt=""> 

        <div class="row">

        

            <div class="col-md-4 col-md-offset-4">

                <div class="login">
                    
                    <form method="POST">
                        <center>CONNEXION ADMIN</center><br>
                        <label for=""></label>
                        <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" class=" username form-control"><br>                  
                        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" class="mdp form-control"><br>
                        <input type="submit" value="Connexion" name="connexion" class=" connexion btn btn-primary btn-outline-light form-control">
                    
                    </form>
                        <?php if (isset($mgs)){ echo '<font color="red">'.$mgs.'</font>'; }?>
                </div>

            </div>

        </div>

    </div>
</body>
</html>