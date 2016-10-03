
<?php
// On demande la liste des atelier au model
include_once('../Model/Modifier_Atelier_Model.php');

update_Atelier($_POST);
echo $_POST['theme'] ;

include_once('../Vue/Liste_Atelier_Vue.php');

