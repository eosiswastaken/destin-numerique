<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type='text/css' media='screen' href='quiz.css'>
    <title>Sécurité</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="index.html">
            <div class="div1">Destin Numérique</div>
        </a>
        <div class="div3">
            <a href="https://www.instagram.com/epsi_ecoles/?hl=fr"><svg class="instagram" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="64px" height="64px">
                    <path d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z" />
                </svg>
            </a>
            <a href="https://www.epsi.fr/"><img src="img/logo_epsi.png" alt="Logo EPSI"></a>
        </div>
    </header>
    <main>
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
                $correct = 0;
                if ($_POST) {
                    $q1 = $_POST['q1'];
                    $q2 = $_POST['q2'];
                    $q3 = $_POST['q3'];
                    $q4 = $_POST['q4'];

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
                if ($correct > 2) {
                    echo "Félicitations, vous avez sécurisé le système !";
                } else {
                    echo "";
                }
                ?>
            </form>
        </body>
    </main>

</html>