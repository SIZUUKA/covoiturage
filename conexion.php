<?php 
$bdd = new PDO('mysql:host=localhost;dbname=projet_covoiturage;charset=utf8;', 'root', '');
if(isset($_POST['submit'])){
    if(!empty($_POST['email']) && !empty($_POST['motDePasse'])){
     $email = htmlspecialchars($_POST['email']);
     $motDePasse = ($_POST['motDePasse']);     
     $recupinternautes = $bdd->prepare('SELECT * FROM internautes where email = ? AND motDePasse = ? ');
     $recupinternautes->execute(array($email, $motDePasse)); 
     if($recupinternautes->rowCount() > 0){
        $_SESSION['email'] = $email;
        $_SESSION['motDePasse'] = $motDePasse;
        $_SESSION['id'] = $recupinternautes->fetch()['id'];
        header('location: p_covoiturage.php');
     }else{
        echo "votre mot de passe ou email incorrect";
     }
 }else{
    echo "veuillez complèter tous les champs "; 
 }
}

//

//

//

//

//

//

//

?>