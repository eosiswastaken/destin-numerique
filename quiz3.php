<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
// Créer un tableau de questions et de réponses
$questions = array(
    array(
        "question" => "Quel est le nom de la capitale de la France ?",
        "answers" => array(
            "Paris",
            "Londres",
            "Rome",
            "Berlin"
        )
    ),
    array(
        "question" => "Quelle est la plus haute montagne du monde ?",
        "answers" => array(
            "Le Mont Everest",
            "Le K2",
            "Le Kangchenjunga",
            "Le Lhotse"
        )
    ),
    array(
        "question" => "Quel est le nom du plus grand océan du monde ?",
        "answers" => array(
            "L'océan Pacifique",
            "L'océan Atlantique",
            "L'océan Indien",
            "L'océan Arctique"
        )
    ),
    array(
        "question" => "Quel est le nom du plus grand désert du monde ?",
        "answers" => array(
            "Le Sahara",
            "Le désert d'Arabie",
            "Le désert de Gobi",
            "Le désert de Taklamakan"
        )
    ),
    array(
        "question" => "Quel est le nom de la plus grande forêt du monde ?",
        "answers" => array(
            "La forêt amazonienne",
            "La forêt boréale",
            "La forêt tropicale du Congo",
            "La forêt tropicale d'Asie du Sud-Est"
        )
    ),
    array(
        "question" => "Quel est le nom du plus grand lac du monde ?",
        "answers" => array(
            "La mer Caspienne",
            "Le lac Supérieur",
            "Le lac Victoria",
            "Le lac Baïkal"
        )
    ),
    array(
        "question" => "Quel est le nom du plus grand fleuve du monde ?",
        "answers" => array(
            "Le Nil",
            "L'Amazone",
            "Le Yangzi Jiang",
        )
        ),
    );

?>
<h1>Quizz</h1>
  <ul>
  <?php
    foreach ($questions as $question) {
      echo "<li>" . $question["question"] . "</li>";
      echo "<ul>";
      foreach ($question["answers"] as $answer) {
        echo "<li><input type='radio' name='" . $question["question"] . "' value='" . $answer . "'>" . $answer . "</li>";
      }
      echo "</ul>";
    }
    ?>
  </ul>
  <input type="submit" value="Soumettre">
</body>
</html>
