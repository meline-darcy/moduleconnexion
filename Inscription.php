<?php
$connect= mysqli_connect("localhost","root","","moduleconnexion");


if (isset($_POST['env']))
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $password = $_POST['password'];
  $login = $_POST['login'];
  $conf = $_POST['confpw']; 


  
};




?>

<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Maitree:wght@300&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>site</title>
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
        <div class="boite2"><h1>Inscription<h1></div>
        <form action="Inscription.php" method="POST" class="formulaire">
            <p>
                <label for="login">Login</label>
                <input type="text" name="login" id="login">
                <label for="prenom">Prénom</label>
                <input name="prenom" type="text" placeholder="prenom" />
                <label for="nom">Nom</label>
                <input name="nom" type="text" placeholder="nom" />
                <label for="password">Mot de Passe</label>
                <input type="password" name="password" id="password">
                <label for="confpw">Confirmation Mot de Passe</label>
                <input type="password" name="confpw" id="confpw">
                <input type="submit"  name="env" class="submit">
            </p>
            <?php
            if (!empty($nom) && !empty($prenom) && !empty($password) && !empty($login)) {
    if ($password == $conf) { 
      echo '...T es juste trop fort mon reuf BVN A TOI';
      $req= mysqli_query($connect,"INSERT INTO utilisateurs (login,prenom,nom,password)
    VALUES('$login','$prenom','$nom','$password')");
    } else {echo 'T as dja oublié ton mdp... tu l as marqué ya 6sec... abuse pas';}

  } else {echo 'Tu dois tout remplir mon reuf... t es vraiment CENSURED';}
       
            
        ?>
        </form>
    <div class="boite2"></div>
  
  </div>
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