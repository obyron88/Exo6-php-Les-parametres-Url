<!DOCTYPEhtml>
<html>
<head>
  <meta charset="utf-8"/>
  <a href= index.php?batiment=12&salle=101&semaine=12&langage=PHP&serveur=LAMP&dateDebut=2/05/2016&dateFin=27/11/2016&age=26&nom=Nemare&prenom=Jean></a>
  </head>
<body><p><?php

  echo "Nom :", " ",  $_GET['nom'];
  echo "<br>", "Prenom :", " ",  $_GET['prenom'];
  echo "<br>", "Age :", " ",  $_GET['age'];
  echo "<br>", "Date de Debut :", " ",  $_GET["dateDebut"];
  echo "<br>", "Date Fin :", " ",  $_GET["dateFin"];
  echo "<br>", "Langage :", " ",  $_GET["langage"];
  echo "<br>", "Serveur :", " ",  $_GET["serveur"];
  echo "<br>", "Semaine :", " ",  $_GET["semaine"];
  echo "<br>", "Batiment :", " ",  $_GET["batiment"];
  echo "<br>", "Salle :", " ", $_GET["salle"];

  ?></p>
  </body>

</html>
