
<?php
// On demande la liste des atelier au model
include_once('../Model/AddAtelierModel.php');


if(count($_POST)) {
	add_Atelier($_POST);
}

	header('Location: ../Vue/Liste_Atelier_Vue.php');