<?php

session_start();

?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css" />
            <link href="https://fonts.googleapis.com/css2?family=Maitree:wght@300&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <title>Accueil</title>
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
            <div id="conteneur">
                <div class="image"></div>
                <div class="conteneur">
                    <p class="petanque">Vous vivez dans le sud ? </br>
                                        Vous aimez la pétanque ? </br>
                                        Alors ce site est fait pour vous !!! </br></p>
                </div></div>
            <div class="bande"></div>
            <div class="texte"><h1>Bleu, blanc, jaune les couleurs de la petanque</h1></br>
                                <p>Sur ce site on vous propose des tournois sur Marseille</br>
                                Nous avons aussi une boutique officiel pour les passionner de pétanque.</p></div>

                                <div class="wrapper">
                <div class="item">
                <div class="polaroid"><img src="https://www.tshirt-corner.com/24378-thickbox_default/je-peux-pas-j-ai-p%C3%A9tanque-t-shirt-homme.jpg">
                <div class="caption">Boutique</div>
              </div>
            </div>
          
            <div class="item">
              <div class="polaroid"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Jeux_de_P%C3%A9tanque_%C3%A0_Valbonne.jpg/1200px-Jeux_de_P%C3%A9tanque_%C3%A0_Valbonne.jpg">
                <div class="caption">Tournois</div>
              </div>
            </div>
</div>
            <div class="bande"></div></br>
            <div class="texte1"><h1>Inscrivez vous pour profiter de réduction sur la boutique</br>
                                    et plein d'autres surprise encore plus folle !!!</h1></br>
                                    <img src="kdo.png">
                                </div>
            <div class='ins'><h3>Connectez-vous </br>
                Vous n'avez pas de compte Inscrivez vous.</h3></div>
               
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