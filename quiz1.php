<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type='text/css' media='screen' href='quiz.css'>
    <title>Programmation</title>
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
        <div class="div2">Catégories</div>
        <div class="div3">
            <a href="https://www.instagram.com/epsi_ecoles/?hl=fr"><svg class="instagram" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="64px" height="64px">
                    <path d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z" />
                </svg>
            </a>
            <a href="https://www.epsi.fr/"><img src="img/logo_epsi.png" alt="Logo EPSI"></a>
        </div>
    </header>
    <main>
        <h2>Répondez simplement par a, b, c ou d </h2>
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
            if ($_POST) {
                $q1 = $_POST['q1'];

                if ($q1 == "d") {
                    $correct++;
                    echo "<p style='color: green;'>Question 1 : Correcte</p>";
                } else {
                    echo "<p style='color: red;'>Question 1 : Incorrecte</p>";
                }
            }
            ?>
    </pre>
            <div style='display:flex;justify-content:space-between;'>
                <div>
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
            if ($_POST) {
                $q2 = $_POST['q2'];

                if ($q2 == "d") {
                    $correct++;
                    echo "<p style='color: green;'>Question 2 : Correcte</p>";
                } else {
                    echo "<p style='color: red;'>Question 2 : Incorrecte</p>";
                }
            }
            ?>
    </pre>
            <div style='display:flex;justify-content:space-between;'>
                <div>
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
            if ($_POST) {
                $q3 = $_POST['q3'];

                if ($q3 == "c") {
                    $correct++;
                    echo "<p style='color: green;'>Question 3 : Correcte</p>";
                } else {
                    echo "<p style='color: red;'>Question 3 : Incorrecte</p>";
                }
            }
            ?>
    </pre>
            <div style='display:flex;justify-content:space-between;'>
                <div>
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
            if ($_POST) {
                $q4 = $_POST['q4'];

                if ($q4 == "a") {
                    $correct++;
                    echo "<p style='color: green;'>Question 4 : Correcte</p>";
                } else {
                    echo "<p style='color: red;'>Question 4 : Incorrecte</p>";
                }
            }
            ?>
    </pre>
            <div style='display:flex;justify-content:space-between;'>
                <div>
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
            <input type="submit" value="Verifier" style="color:white">
            <?php
            echo "<pre>Tu as $correct réponse juste</pre>";
            ?>
        </form>
    </main>
</body>

</html>