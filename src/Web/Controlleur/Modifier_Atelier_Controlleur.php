
<?php
// On demande la liste des atelier au model
include_once('../Model/Modifier_Atelier_Model.php');

if(count($_POST)) {
	update_Atelier($_POST);
}


header('Location:../Vue/Liste_Atelier_Vue.php');



