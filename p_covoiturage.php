
<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=projet_covoiturage;charset=utf8;', 'root', '');

if( (isset($_POST['submit']))) {
    $nbPlaces = htmlspecialchars($_POST['nbPlaces']);
    $date = htmlspecialchars($_POST['Daate']);
    $villeD = htmlspecialchars($_POST['villeDépart']);
    $villeA = htmlspecialchars($_POST['villeArrivée']);
    $prixRecommande = htmlspecialchars($_POST['prixRecommandé']);
    $email = htmlspecialchars($_POST['email']);


    global $bdd; //njibo cnx li fi pdo / 
    $web = $bdd ->prepare ("INSERT INTO trajets (villeDépart, villeArrivée, prixRecommandé) VALUES (?,?,?)");
    $web->execute(array($villeD,$villeA,$prixRecommande));//execute ppour les requette preparer 
    $id_trajet = $bdd->LastInsertID();//ma7tajino bach ncreew covoiturage madarnach clee primaire hit auto_inc
    //cree un covoiturage qui a comme clef etrangere IDtrajet 
    $web = $bdd->prepare("INSERT INTO covoiturages(idTrajet,daate,email,nbPlaces)VALUES(?,?,?,?)");
    $web->execute(array($id_trajet,$date,$email,$nbPlaces));
    //echo 'covoiturage et trajet creer avec succes';

}

//

//

//

//

//

//

//


?>
<!DOCTYPE html>
<html lang="fr">
<!------------------------------------------- SHAIBI_IZOUKA,----------------------------->    
<!--------------------------- HAI726I Projet web: site de covoiturage --------------------> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> HAI726I Projet web SHAIBI </title>
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

            <div id="top-nav">
                <ul>
                    <li>
                        <fieldset>
                            <legend> <strong>Bienvenue</strong></legend>
                            <strong>Nous Sommes Ravis De Vous Compter Parmi Nos Nouveaux Clients</strong> <br> <br> <br>  
                        </fieldset>
                    </li>
                    <li>
                        <a href="deconnexion.php">

                        <input class="favorite styled" type="button" value="Deconexion">

                        </a>

                    </li>
                </ul>
            </div>

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
        <form method="post">
            <ul>
                <li>
                    <fieldset>
                        <legend> <strong>Proposer un Trajet</strong></legend>
                        <strong>Départ</strong> <input type="text" name ="villeDépart"  placeholder="Ville de départ">
                        <strong>Destination</strong> <input type="text" name ="villeArrivée" placeholder="Ville d'arrivée">
                        <strong>Prix</strong> <input type="text" name ="prixRecommandé" placeholder="prix">
                        <strong>Date</strong> <input type="date" name ="Daate">
                        <strong>Email</strong> <input type="email" name="email" /><br>
                        <strong>nbPlaces</strong> <input type="number" min = "1" max = "4" name = "nbPlaces" placeholder="entre 1 et 4">        
                        <input class="favorite styled" type="submit" name="submit" value="Ajouter">
                        <a href="r_covoiturage.php">
                            <input class="favorite styled" type="button" value="Rechercher">
                        </a>
                
                    </fieldset>         
                </li>
            </ul> 
</form>    
        </div>

    </main> <br><br><br><br><br><br><br>
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
