<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        </br>

        <?php include_once('../Controlleur/Liste_Atelier_Controlleur.php'); ?>

        <title>Description d'un atelier</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

    </head>

    <body>




        <div class="container">


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Description d'un atelier
                        <small></small>
                    </h1>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <p></p>



                    <div class="col-md-10 col-md-offset-1">

                        <div class="panel panel-default panel-table">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col col-xs-6">
                                        <h3 class="panel-title"> </h3>
                                    </div>

                                </div>
                            </div>
                            <div class="panel-body">


                                <?php
                                foreach ($ateliers as $row) {
                                    if ($row["id"] == $_GET["id"]) {
                                        ?>
                                        <h2>Résumé</h2>
                                        <p><?php echo $row["resume"]; ?></p>

                                        <h2>Animateur/conférencier</h2>
                                        <p><?php echo $row["animateur_conferencier"]; ?></p>


                                        <h2>Partenaires</h2>
                                        <p><?php
                                            if (!empty($row["partenaires"])) {
                                                echo $row["partenaires"];
                                            } else {
                                                echo "Aucun";
                                            }
                                            ?></p>

                                        <h2>Public visé</h2>
                                        <p><?php echo $row["public_vise"]; ?></p>

                                        <h2>Contenu pédagogique et disciplines scolaires visées</h2>
                                        <p><?php echo $row["cont_ped"]; ?></p>


                                        <?php
                                    }
                                }
                                ?>








                            </div>

                            <div class="col col-xs-12 text-right">
                                <button type="button" class="btn btn-default">Modifier</button>

                                <button type="button" class="btn btn-default">Supprimer</button>
                            </div>

                        </div></div>
                </div>

                <hr>


            </div>



    </body>





</html>
