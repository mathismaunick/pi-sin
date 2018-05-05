<!DOCTYPE html>
<html>
<?php include ('Co.php'); ?>
<head>
	<title>Creer un evenement</title>
    <link href="page.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!--header-->
  <header class="container-fluid header">
    <div class="container">
      <a class="logo">Roze</a>
      <nav class="menu">
        <a href="Accueil.php"> Accueil </a>
        <a href="reseau.php"> Réseau </a>
        <a href="emplois.php"> Emplois </a>
        
        <a href="notification.php"> Notification </a>
        <a href="Vous.php"> Vous </a>
        <a href="deconnexion.php"><img src="images/logout1.PNG"> </a>
      </nav>
    </div>
  </header>


<div class="contenu_global">

<h1 class="Roze" class="center" >Veuillez créer un évènement</h1>

<form method="post" action="evenement2.php">
  Rentrez la date de l'evenement:<br>
  <input type="date" name="DateEvent" ><br>

  Rentrez le lieu de l'evenement:<br>
  <input type="text" name="lieu"><br>
  
  Description de l'evenement:<br>
  <input type="text" name="Texte" size="50" style="height:250px;"><br>

  <input type="submit" class="btn_vert" value="Valider l'evenement">
</form>


</div>



</body>

</html>