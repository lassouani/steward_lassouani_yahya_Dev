
<?php
// On demande la liste des atelier au model
include_once('../Model/Modifier_Atelier_Model.php');

update_Atelier();
echo $_POST['theme'] ;

//include_once('../Vue/Liste_Atelier_Vue.php');

	header('Location: ../Vue/Liste_Atelier_Vue.php');
