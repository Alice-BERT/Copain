<?php

//Informations à la base de données MySQL
define('DB_SERVER','localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'database');

//Connexion à la base de  données MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Vérifier la connexion
if($conn == false){
    die("Erreur : Connexion Impossible".mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php
            if(isset($_REQUEST['Login'], $_REQUEST['Motdepasse'])){
                $username = stripslashes($_REQUEST['Login']);
                $username = mysqli_real_escape_string($conn, $username);
                $password = stripslashes($REQUEST['Motdepasse']);
                $password = mysqli_real_escape_string($conn, $password);
                $query = "INSERT into 'compte' (Login, Motdepasse) VALUES ('$username','$password')";
                $res = mysqli_query($conn, $query);
                if($res){
                    echo"<div class='sucess'>
                        <h2> Membre créé.e avec succès.</h2>
                        <a href='accueil.html'>Cliquez ici pour revenir en arrière</a>
                        </div>";
                }
            }
            else{
                ?>
                <form class="box" action="" method="post">
                    <h1 class="box-title">Creation de membre</h1>
                    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
                    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
                    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
                </form>
           <?php }
        ?>
    </body>
</html>