<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type='text/css' media='screen' href='quiz.css'>
    <title>Programmation</title>
</head>
<h2>Répondez simplement par a, b, c ou d </h2>
<body>
<form action="quiz1.php" method="POST">
    <pre>Complétez l'algorithme en Python pour calculer la somme de deux nombres a et b et retourner le résultat :

        def somme_deux_nombres(a, b):
            resultat = ________  # Complétez cette ligne
            return resultat

            a)  a+b
            b)  a*b
            c)  a/b
            d)  a+b
    </pre>
    <input type="text" name="q1">
    <pre> Complétez l'algorithme en Python pour vérifier si un nombre x est positif et retourner True s'il est positif ou False sinon : 

        def est_positif(x):
            if ________:  # Complétez cette ligne
                return True
            else:
                return False 

            a)	x<0
            b)	x=0
            c)	x
            d)	x>0
    </pre> 
    <input type="text" name="q2">
    <pre>Complétez l'algorithme en Python pour calculer le carré d'un nombre n et retourner le résultat.

        def carre(nombre):
            resultat = ________  # Complétez cette ligne
            return resultat

            a)	nombre/nombre
            b)	nombre+nombre 
            c)  nombre*nombre
            d)	nombre-nombre 
    </pre>
    <input type="text" name="q3">
    <pre> Complétez l'algorithme en Python pour vérifier si un nombre est pair ou impair et renvoyer "Pair" ou "Impair" en conséquence.

        def verifier_parite(nombre):
            if nombre ________  : #Completez cette ligne
                return « Pair » 
            else:
                return « Impair »
                
            a)	% 2 == 0
            b)	% 3 == 0
            c)	2 / 2 == 0
            d)	5
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

    if ($q1 == "d") {
        $correct++;
      } 
    if ($q2 == "d") {
        $correct++;
      }
    if ($q3 == "c") {
        $correct++;
      }
    if ($q4 == "a") {
        $correct++;
      }
      echo "<pre>Tu as $correct réponse juste</pre>";
    } else {
        echo "<pre> Remplissez les champs!</pre>";
    }
    ?>

<script>
    document.querySelector("form").addEventListener("submit", function(e) {
        e.preventDefault();
    });
</script>
</form>
</body>
</html>

