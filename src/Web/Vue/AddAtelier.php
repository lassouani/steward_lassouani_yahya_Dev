<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajouter un Atelier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Ajouter un Atelier</h2>
  <form action="../Model/AddAtelierModel.php" method="post">
        <div class="col-xs-4">

    <div class="form-group">
      <label for="text">Titre Definitif</label>
      <input type="text" class="form-control" name="titre_definitif" placeholder="Entrer le titre">
    </div>
	
	<div class="form-group">
      <label for="text">Thème</label>
      <input type="text" class="form-control" name="theme" placeholder="Entrer le Thème">
    </div>
	
	<div class="form-group">
      <label for="text">Type</label>
      <input type="text" class="form-control" name="type" placeholder="Entrer le Type">
    </div>
	
	<div class="form-group">
      <label for="text">Dates et Horaires</label>
      <input type="text" class="form-control" name="date_horaires" placeholder="...">
    </div>
	
	<div class="form-group">
      <label for="text">Remarques</label>
      <input type="text" class="form-control" name="remarque" placeholder="...">
    </div>
	
	<div class="form-group">
      <label for="text">Laboratoire</label>
      <input type="text" class="form-control" name="laboratoire" placeholder="...">
    </div>
	
		
	<div class="form-group">
      <label for="text">Lieu</label>
      <input type="text" class="form-control" name="lieu" placeholder="...">
    </div>
		
	<div class="form-group">
      <label for="text">Durée</label>
      <input type="text" class="form-control" name="duree" placeholder="...">
    </div>
	
	<div class="form-group">
      <label for="text">Capacité</label>
      <input type="number	" class="form-control bfh-number" min="0" name="capacite">
    </div>
	
	<div class="form-group">
      <label for="text">Inscription</label>
      <input type="text" class="form-control" name="inscription" placeholder="...">
    </div>
		
	<div class="form-group">
  <label for="comment">Resumé:</label>
  <textarea class="form-control" rows="5" name="resume"></textarea>
</div>
			
	<div class="form-group">
      <label for="text">Animateur Conferencier</label>
      <input type="text" class="form-control" name="animateur_conferencier" placeholder="Entrer l'Animateur Conferencier">
    </div>
			
	<div class="form-group">
      <label for="text">Partenaires</label>
      <input type="text" class="form-control" name="partenaires" placeholder="Entrer les Partenaires">
    </div>
	
	<div class="form-group">
      <label for="text">Public visé</label>
      <input type="text" class="form-control" name="public_vise" placeholder=" ...">
    </div> 
	
	 <div class="form-group">
      <label for="text">cont_ped???</label>
      <input type="text" class="form-control" name="cont_ped" placeholder="Entrer le Lieu">
    </div>
	
	 
		
    <button type="submit" class="btn btn-default">Ajouter</button>
	    </div>

  </form>
</div>

</body>
</html>

