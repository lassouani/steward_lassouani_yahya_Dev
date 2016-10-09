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

        <title>Liste des ateliers</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

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


        <div class="container">


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Liste des Ateliers
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
                                    <div class="col col-xs-6 text-right">
                                        <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">



                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Titre </em></th>
                                            <th>Type</th>
                                            <th>Durée</th>
                                            <th>Capacité</th>
                                            <th>Théme</th>
                                            <th>Public visé</th>

                                        </tr> 
                                    </thead>
                                    <tbody>




                                        <?php
                                        foreach ($ateliers as $row) {
                                            ?>
                                            <tr data-id=<?php echo $row["id"]; ?>> 
                                                <td align="center"> <?php echo $row["titre_definitif"]; ?> </td>
                                                <td align="center"> <?php echo $row["type"]; ?> </td>
                                                <td align="center"> <?php echo $row["duree"]; ?></td>
                                                <td align="center"> <?php echo $row["capacite"]; ?> </td>
                                                <td align="center"> <?php echo $row["theme"]; ?> </td>
                                                <td align="center"> <?php echo $row["public_vise"]; ?></td>  
                                                <?php
                                            }
                                            ?>
                                        </tr>


                                    </tbody>
                                </table>






                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col col-xs-4"> page(s)
                                    </div>
                                    <div class="col col-xs-8">
                                        <ul class="pagination hidden-xs pull-right">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                        </ul>
                                        <ul class="pagination visible-xs pull-right">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div></div>
            </div>

            <hr>

            <!-- Footer -->
            <footer class="container-fluid text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2016</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

        </div>

        <script>
            window.onload = function () {
                var elems = document.querySelectorAll("table tr");
                for (var i = 0; i < elems.length; i++) {
                    elems[i].addEventListener('click', function () {
                        var url = './Description_Atelier_Vue.php?id=' + this.getAttribute('data-id');
                        //window.open(url); // pour ouvrir le lien dans un nouvel onglet
                        window.location.href = url; // pour ouvrir le lien dans le même onglet
                    });
                }
            };
        </script>

    </body>





</html>
