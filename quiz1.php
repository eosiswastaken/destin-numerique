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
    <?php
    $correct = 0 
    ?>
<form action="quiz1.php" method="POST">
    <pre>Complétez l'algorithme en Python pour calculer la somme de deux nombres a et b et retourner le résultat :

        def somme_deux_nombres(a, b):
            resultat = ________  # Complétez cette ligne
            return resultat

            a)  a+b
            b)  a*b
            c)  a/b
            d)  a+b

            <?php 
                if($_POST){
                    $q1 = $_POST['q1'];
                
                    if ($q1 == "d") {
                        $correct++;
                        echo "<p style='color: green;'>Question 1 : Correcte</p>";
                    }   else {
                        echo "<p style='color: red;'>Question 1 : Incorrecte</p>";
                    }
                }
            ?>
    </pre>
    <div style='display:flex;justify-content:space-between;'>
        <div >
        <label>A</label>
        <input type="radio" name="q1" value='a'>
        </div>
        <div>
        <label>B</label>
        <input type="radio" name="q1" value='b'>
        </div>
        <div>
        <label>C</label>
        <input type="radio" name="q1" value='c'>
        </div>
        <div>
        <label>D</label>
        <input type="radio" name="q1" value='d'>
        </div>
    </div>
    
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
            <?php 
                if($_POST){
                    $q2 = $_POST['q2'];
                
                    if ($q2 == "d") {
                        $correct++;
                        echo "<p style='color: green;'>Question 2 : Correcte</p>";
                    }   else {
                        echo "<p style='color: red;'>Question 2 : Incorrecte</p>";
                    }
                }
            ?>
    </pre> 
    <div style='display:flex;justify-content:space-between;'>
        <div >
        <label>A</label>
        <input type="radio" name="q2" value='a'>
        </div>
        <div>
        <label>B</label>
        <input type="radio" name="q2" value='b'>
        </div>
        <div>
        <label>C</label>
        <input type="radio" name="q2" value='c'>
        </div>
        <div>
        <label>D</label>
        <input type="radio" name="q2" value='d'>
        </div>
    </div>
    <pre>Complétez l'algorithme en Python pour calculer le carré d'un nombre n et retourner le résultat.

        def carre(nombre):
            resultat = ________  # Complétez cette ligne
            return resultat

            a)	nombre/nombre
            b)	nombre+nombre 
            c)  nombre*nombre
            d)	nombre-nombre

            <?php 
                if($_POST){
                    $q3 = $_POST['q3'];
                
                    if ($q3 == "c") {
                        $correct++;
                        echo "<p style='color: green;'>Question 3 : Correcte</p>";
                    }   else {
                        echo "<p style='color: red;'>Question 3 : Incorrecte</p>";
                    }
                }
            ?>
    </pre>
    <div style='display:flex;justify-content:space-between;'>
        <div >
        <label>A</label>
        <input type="radio" name="q3" value='a'>
        </div>
        <div>
        <label>B</label>
        <input type="radio" name="q3" value='b'>
        </div>
        <div>
        <label>C</label>
        <input type="radio" name="q3" value='c'>
        </div>
        <div>
        <label>D</label>
        <input type="radio" name="q3" value='d'>
        </div>
    </div>
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

            <?php 
                if($_POST){
                    $q4 = $_POST['q4'];
                
                    if ($q4 == "a") {
                        $correct++;
                        echo "<p style='color: green;'>Question 4 : Correcte</p>";
                    }   else {
                        echo "<p style='color: red;'>Question 4 : Incorrecte</p>";
                    }
                }
            ?>
    </pre>
    <div style='display:flex;justify-content:space-between;'>
        <div >
        <label>A</label>
        <input type="radio" name="q4" value='a'>
        </div>
        <div>
        <label>B</label>
        <input type="radio" name="q4" value='b'>
        </div>
        <div>
        <label>C</label>
        <input type="radio" name="q4" value='c'>
        </div>
        <div>
        <label>D</label>
        <input type="radio" name="q4" value='d'>
        </div>
    </div>
    <input type="submit" value="Verifier">
    <?php
        echo "<pre>Tu as $correct réponse juste</pre>";
    ?>
</form>
</body>
</html>

