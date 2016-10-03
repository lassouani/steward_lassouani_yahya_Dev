<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modifier un Atelier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

 

<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Start Bootstrap</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>
		
		</br>
		
		</br>
		</br>


<?php include_once('../Controlleur/Liste_Atelier_Controlleur.php'); ?>


<div class="container">
  <h2>Modification d'un Atelier</h2>
  <form action="Modifier_Atelier_Controlleur.php" method="post"> 
        <div class="col-xs-4">
		
		
		 <?php
			foreach ($ateliers as $row) 

			{
				if ($row["id"] == $_GET["id"]) 
				{
						?>   
										
						<div class="form-group">
						  <label for="text">Titre Definitif</label>
						  <input type="text" class="form-control" name="titre_definitif" value= "<?php echo $row['titre_definitif'];?>">
						</div>
						
						<div class="form-group">
						  <label for="text">Thème</label>
						  <input type="text" class="form-control" name="theme" value="<?php echo $row['theme'];?>">
						</div>
						
						<div class="form-group">
						  <label for="text">Type</label>
						  <input type="text" class="form-control" name="type" value="<?php echo $row['type'];?>">
						</div>
						
						<div class="form-group">
						  <label for="text">Dates et Horaires</label>
						  <input type="text" class="form-control" name="date_horaires" value="<?php echo $row['date_horaires'];?>">
						</div>
						
						<div class="form-group">
						  <label for="text">Remarques</label>
						  <input type="text" class="form-control" name="remarque" value="<?php echo $row['remarque'];?>">
						</div>
						
						<div class="form-group">
						  <label for="text">Laboratoire</label>
						  <input type="text" class="form-control" name="laboratoire" value="<?php echo $row['laboratoire'];?>">
						</div>
						
							
						<div class="form-group">
						  <label for="text">Lieu</label>
						  <input type="text" class="form-control" name="lieu" value="<?php echo $row['lieu'];?>">
						</div>
							
						<div class="form-group">
						  <label for="text">Durée</label>
						  <input type="text" class="form-control" name="duree" value="<?php echo $row['duree'];?>">
						</div>
						
						<div class="form-group">
						  <label for="text">Capacité</label>
						  <input type="number	" class="form-control bfh-number" min="0" name="capacite" value="<?php echo $row['capacite'];?>">
						</div>
						
						<div class="form-group">
						  <label for="text">Inscription</label>
						  <input type="text" class="form-control" name="inscription" value="<?php echo $row['inscription'];?>">
						</div>
							
						<div class="form-group">
					  <label for="comment">Resumé:</label>
					  <textarea class="form-control" rows="5" name="resume" value="<?php echo $row['resume'];?>"></textarea>
					</div>
								
						<div class="form-group">
						  <label for="text">Animateur Conferencier</label>
						  <input type="text" class="form-control" name="animateur_conferencier" value="<?php echo $row['animateur_conferencier'];?>">
						</div>
								
						<div class="form-group">
						  <label for="text">Partenaires</label>
						  <input type="text" class="form-control" name="partenaires" value="<?php echo $row['partenaires'];?>">
						</div>
						
						<div class="form-group">
						  <label for="text">Public visé</label>
						  <input type="text" class="form-control" name="public_vise" value="<?php echo $row['public_vise'];?>">
						</div> 
						
						 <div class="form-group">
						  <label for="text">Contenue pédagogique</label>
						  <input type="text" class="form-control" name="cont_ped" value="<?php echo $row['cont_ped'];?>">
						</div>
	
	<?php
			     } 
		     }   ?>
					
		
   
	 <a href="../Controlleur/Modifier_Atelier_Controlleur.php"><input type="button" class="btn btn-default" name="Sauvgarder"value="Sauvgarder"/></a>
	    </div>
		
		
		<!-- Footer -->
            <footer class="container-fluid text-center">
                <div class="row">
                    <div class="col-lg-12">
					<hr>
                        <p>Copyright &copy; Your Website 2016</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

  </form>
</div>

</body>
</html>

