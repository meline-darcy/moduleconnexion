<?php

session_start();
$id = $_SESSION["id"];
$bdd = mysqli_connect("localhost:3306","meline","26u4Ll!u","meline-darcy_moduleconnexion");


$req= mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE id = $id");

$res= mysqli_fetch_all($req,MYSQLI_ASSOC);

$login = $res[0]['login'];
$prenom = $res[0]['prenom'];
$nom = $res[0]['nom'];
$password = $res[0]['password']; 


if (isset($_POST['env']))
{
   
    $nom1 = $_POST['nom'];
    $prenom1 = $_POST['prenom'];
    $password1 = $_POST['password'];
    $login1 = $_POST['login'];
    $req2= mysqli_query($bdd,"UPDATE utilisateurs SET login='$login1', prenom='$prenom1', nom='$nom1', password='$password1' WHERE  id = $id ");
    header("Location: profil.php");
} 





?>

<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Maitree:wght@300&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
    <body>
    <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Tournoi</a></li>
                <li><a href="#">Boutiques</a></li>
                <li class="deroulant"><a href="#">Espace Membres &ensp;</a>
      <ul class="sous">
        <?php 
        if (isset($_SESSION["id"])) {
        echo "<li><a href='crash.php'>Déconnexion</a></li>";
        echo "<li><a href='profil.php'>Profil</a></li>"; 
         } else {
        echo "<li><a href='connexion.php'>Se connecter</a></li>";
        echo "<li><a href='Inscription.php'>Sinscrire</a></li>";
    };
        ?>
      </ul>
    </li>
            </ul>
        </nav>
        <div class="boite2"><h1>Modifie ton profil<h1></div>
            <div id="conteneur">
    <form name="formu" action="" method="post">
        <label for ="login">Login</label>
        <input id="login" name="login" value="<?php echo $login?>" type="text" placeholder="username"/>
        <label for ="prenom">prenom</label>
        <input name="prenom" value="<?php echo $prenom?>" type="text" placeholder="prenom" />
        <label for ="nom">nom</label>
        <input name="nom" value="<?php echo $nom?>" type="text" placeholder="nom" />
        <label for ="password">Password</label>
        <input name="password" value="<?php echo $password?>" type="password" placeholder="Ton mdp"/>
        <input name="env" type="submit" placeholder="clic">
    </form>
    </div>
    </br></br></br></br>
    <div class="boite2"></div>
  
  
</div>
<footer class=footer>
                <div class="container">
                    <div class="row">   
                        <div class="footer1">   
                        <h4>Entreprise</h4>
                            <ul>
                                <li><a href="#">A propos de nous</a></li>
                                <li><a href="#">Nos services</a></li>
                                <li><a href="#">Notre politique</a></li>
                            </ul>    
                        </div>                          

                <div class="footer1">    
                    <h4>Nous contacter</h4>
                    <ul>
                        <li><a href="#">+33(0)6.XX.XX.XX.XX</a></li>
                        <li><a href="#">+33(0)4.XX.XX.XX.XX</a></li>
                        
                    </ul>    
                </div>    
<div class="footer1">    
                    <h4>Réseaux sociaux</h4>
                    <div class="s-links">
                        <div></div>
                        <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <a href="#"><i class="fab fa-instagram"></i></a></li>
                        <a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <a href="#"><i class="fab fa-whatsapp"></i></a></li>
                        <a href="https://github.com/meline-darcy?tab=repositories"><i class="fab fa-github"></i></a></li>
                    </div>
                </div>             
            </div>
        </div>
        <small>&copy; Copyright 2021, Méline</small>

    </footer> 

    </body>
</html>

