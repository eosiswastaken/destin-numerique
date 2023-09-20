<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type='text/css' media='screen' href='quiz.css'>
    <title>Sécurité</title>
</head>
<h2>Testez vos connaissances en sécurité informatique pour neutraliser le hacker</h2>
<h3>Répondez correctement à une série de questions liées à la sécurité informatique pour empêcher le hacker virtuel de compromettre le système.</h3>
<body>
    <form action="quiz2.php" method="POST">
        <pre>Qu'est-ce que l'acronyme “DDoS” signifie-t-il ?

            a) Distributed Denial of Service
            b) Data Defense and systems
            c) Suspicious Operations Detection Device
        </pre>
        <input type="text" name="q1">
        <pre> Quelle est une pratique de sécurité recommandée pour créer un mot de passe fort ?

            a) Utiliser votre nom complet 
            b) Utiliser des caractères spéciaux et des chiffres 
            c) Utiliser le même mot de passe partout 
        </pre> 
        <input type="text" name="q2">
        <pre>Qu'est-ce que le “phishing” ?

            a) Une technique de cryptographie 
            b) Une attaque visant à tromper les utilisateurs pour obtenir des informations personnelles 
            c) Une sauvegarde de données 
        </pre>
        <input type="text" name="q3">
        <pre> Quel est l'objectif principal d'un pare-feu (firewall) ?

            a) Bloquer l'accès à Internet
            b) Empêcher les incendies dans les centres de données 
            c) Contrôler le trafic réseau et protéger contre les menaces 
        </pre>
        <input type="text" name="q4">
        <input type="submit" value="Verifier">
        <?php

        if($_POST){
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $correct = 0;

            if ($q1 == "a") {
                $correct++;
            } 
            if ($q2 == "b") {
                $correct++;
            }
            if ($q3 == "b") {
                $correct++;
            }
            if ($q4 == "c") {
                $correct++;
            }
            echo "<pre>Tu as $correct réponse juste</pre>";
        } else {
            echo "<pre> Remplissez les champs!</pre>";
        }
        if($correct>2){
            echo "Félicitations, vous avez sécurisé le système !";
        }else{
            echo "";
        }
        ?>
    </form>
</body>
</html>