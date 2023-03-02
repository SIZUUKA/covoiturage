<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=projet_covoiturage;charset=utf8;', 'root', '');
if( (isset($_GET['nbPlaces'])) && isset($_GET['Daate']) && isset($_GET['villeDépart']) && isset($_GET['villeArrivée'])){ 
    $nbPlaces = htmlspecialchars($_GET['nbPlaces']);
    $date = htmlspecialchars($_GET['Daate']);
    $villeD = htmlspecialchars($_GET['villeDépart']);
    $villeA = htmlspecialchars($_GET['villeArrivée']);


    $var = $bdd->prepare('SELECT  trajets.villeDépart, trajets.villeArrivée, trajets.prixRecommandé,  covoiturages.Daate, covoiturages.nbPlaces 
    from covoiturages INNER JOIN trajets ON covoiturages.idTrajet=trajets.idTrajet where covoiturages.nbPlaces LIKE "%' . $nbPlaces . '%" 
     and covoiturages.Daate LIKE "%' . $date . '%" and covoiturages.Daate LIKE "%' . $date . '%" AND  trajets.villeDépart LIKE "%' . $villeD . '%"
     AND  covoiturages.nbPlaces LIKE "%' . $nbPlaces . '%"  ');
    $var->execute();
    $nombre_co = $var->rowCount();
}

// on a utilisé 'isset' afin de faire la verification a nos données qui sont déclarer genre les attributs 

// Get c'est une méthode pour faire appelé a nos attributs 

// htmlspecialchars ==> permet de convertire les caractéres speciaux en entité html exemple (& et '')

// fetch permet de récupérer 

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
                            <strong>Chez nous vous trouvez les meilleurs offres ! </strong> <br> <br> <br>  
                        </fieldset>
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
            <img src="images/covoiturage.jpg" alt="home picture" width="1540" height="300"/>
        </div>
        <div>
            <ul>
                <li>
                    <fieldset>
                        <legend> <strong>Page Precédente</strong></legend>
                        <a href="p_covoiturage.php">
                            <input class="favorite styled" type="button" value="Retour">
                        </a>
                    </fieldset> 
                </li>
</ul>

            <form method="GET" action="">
            <ul>
                 
                <li>
                    <fieldset>
                        <legend> <strong>Rechercher un Trajet</strong></legend>
                        <strong>Départ</strong> <input type="text" name = "villeDépart" placeholder="Ville de départ">
                        <strong>Destination</strong> <input type="text" name = "villeArrivée" placeholder="Ville d'arrivée">
                        <strong>Date</strong> <input type="date" name = "Daate">
                        <strong>nombre de place</strong> <input type="number" name = "nbPlaces" placeholder="nombre de place"> 
                        <input class="styled" type="submit" name="submit" value="Rechercher">
                    </fieldset>         
                </li>
            </ul>  
</form>     

<?php 
if($var->rowCount() > 0){
    while($Data = $var-> fetch()) {
        ?>
      
      <table class="style-table" style="margin-left: auto; margin-right: auto; font-size:20px">
        <thead>
          
          <tr >
          <centre>
            <th scope="col">nb place :</th>
            <th scope="col">date :</th>
            <th scope="col">ville départ :</th>
            <th scope="col">ville arrivée :</th>
            <th scope="col">Prix</th>
            </centre>
          </tr>
      
        </thead>
        <tbody>
          <tr >
            <th><?= $Data['nbPlaces']?></th>
            <th><?= $Data['Daate']?></th>
            <th><?= $Data['villeDépart']?></th>
            <th><?= $Data['villeArrivée']?></th>
            <th><?= $Data['prixRecommandé']?></th>
      
      
          </tr>
        </tbody>
      </table>
          <?php
          }
}

    ?>
        </div>
         </main> <br><br><br><br><br><br><br><br>
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