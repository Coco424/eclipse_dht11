<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insertion données</title>

        
    </head>
    <body>
        <h1>Ajout de données dans la BDD DHT11</h1>
        <?php
        /*Inclusion d'un fichier de configuration pour centraliser les informations de connexion*/
        require_once 'config.inc.php';

        /*Essai de connexion en créant on objet connexion avec les informations de la BDD*/
        try {
            //Connexion
            $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            //Préparation de la requête
            $bdd=('INSERT INTO `donnees` (`date_heure`, `temperature`, `humidite`) VALUES (CURRENT_TIMESTAMP, 22, 25);');
            
            //Affichage du résultat
            echo('<div>Une nouvelle insertion a été ajoutée </div>');

            $req = null;
            
            $bdd = null;
        } 
        catch (PDOException $e) {
            print "Erreur : " . $e->getMessage() . "<br/>";
            die();
        }
        ?>
    </body>
</html>