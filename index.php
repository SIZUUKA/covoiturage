<?php
require_once 'conexion.php'; 
session_start(); 
$bdd = new PDO('mysql:host=localhost;dbname=projet_covoiturage;charset=utf8;', 'root', ''); 
?>

<!DOCTYPE html>
<html lang="fr">
<!------------------------------------------- SHAIBI_IZOUKA ------------------------------>    
<!--------------------------- HAI726I Projet web: site de covoiturage --------------------> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> HAI726I Projet web SHAIBI_IZOUKA </title>
    <link rel="shortcut icon" href="images/car-sharing.ico" />
    <link href="css/main.css" rel="stylesheet">  
    <link href="css/index.css" rel="stylesheet">  
</head>



<body>
   
    <!---------------------------- Header --------------------------------------------------->
    <header id="header">
        <div id="header-contenu">
            <div id="logo">
                <h1><a href="index.php">Co<span>Voiturage</span></a></h1>
            </div>

            <form method="post">

            <div id="top-nav">
                <ul>
                    <li>
                        <fieldset>
                            <legend> <strong>Identification</strong></legend>
                            <strong>email</strong> <input type="email" name="email" placeholder="votre@email.com" required >
                            <strong>Mot de passe</strong><input type="password" name="motDePasse" placeholder="*********">
                                <input class="favorite styled" type="submit" name="submit" value="Connexion">
                        </fieldset>
                    </li>
                  
                </ul>
            </div>

            </form>
    
            <div class="clr"></div>
        </div>
    </header> <br> <br> <br> <br><br><br><br><br>
    <!--------------------------------------------------------------------------------------->
    <!---------------------------- Main ----------------------------------------------------->
    <main id="main">
        <div>
            <img src="images/covoiturage.jpg" alt="home picture" width="1540" height="340"/>
        </div>
        <div>
            <table>
                <tr>
                    <th><h2>Vos trajets pr??f??r??s ?? petits prix</h2></th>
                    <th><h2>Voyagez en toute confiance</h2></th>
                    <th><h2>Recherchez, cliquez et r??servez !</h2></th>
                </tr>
                <tr>
                    <td>
                        <p>
                            <p>O?? que vous alliez, en covoiturage,</p> 
                            <p>trouvez le trajet id??al parmi notre large </p> 
                            <p>choix de destinations ?? petits prix.</p>
                        </p> 
                    </td>
                    <td>
                        <p>
                            <p>Nous prenons le temps qu???il faut pour conna??tre nos membres. </p>
                            <p>Nous v??rifions les avis, les profils et les pi??ces d???identit??.</p> 
                            <p>Vous savez donc avec qui vous allez voyager pour r??server </p>
                            <p>en toute confiance sur notre plateforme.</p>
                        </p> 
                    </td>
                    <td>
                        <p>
                            <p>R??server un trajet devient encore plus simple !</p>  
                            <p>Facile d'utilisation et dot??e de technologies avanc??es,</p> 
                            <p>vous permet de r??server un trajet ?? proximit?? en un rien de temps.</p>
                        </p>
                    </td>
                </tr>
            </table>
        </div> 
    </main>
    <!--------------------------------------------------------------------------------------->
    <!---------------------------- Footer --------------------------------------------------->
    <footer id="main-footer">
        <div class="copyright-info">
            <p> &copy; 2022 <strong>SHAIBI_IZOUKA</strong> <strong> </strong>  </p>
        </div>
    </footer>
    <!--------------------------------------------------------------------------------------->
</body>
</html>