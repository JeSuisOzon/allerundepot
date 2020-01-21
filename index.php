<?php
	
	// Include des fichiers de la base de données

	include_once "bdd/bdd.php";
  	include_once "bdd/produits.php";

  	// Création des tableas dans la base de données

 	cree_table_produits();

?>



<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>

  <!-- CSS Bootstrap -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="col-12 text-center bg-success text-white">
	Le vrai sens
</div>

<div class="row col-sm-8 offset-sm-2 border rounded bg-">

	<div class="col text-center">
		<a href=""> Boutique </a>
	</div>

	<div class="col text-center">
		<a href=""> Actualités </a>
	</div>

	<div class="col text-center">
		<a href=""> A propos </a>
	</div>

	<div class="col text-center">
		<a href=""> Nous contacter </a>
	</div>

	<div class="col text-center">
		<a href=""> Méthodes de fabrication </a>
	</div>

</div>

<FORM method="POST" name="ajax" action="">
        <INPUT type="BUTTON" value="Submit"  ONCLICK="submitForm()">
        <INPUT type="text" name="dyn"  value="">
</FORM>


<?php


?>
	


<!-- Scripts Javascript pour Bootstrap -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!---------------------------------------->

</body>
</html>