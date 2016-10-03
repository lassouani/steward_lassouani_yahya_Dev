
<?php
// On demande la liste des atelier au model
include_once('../Model/Modifier_Atelier_Model.php');
var_dump($_POST) ; 

update_Atelier($_POST);


include_once('../Vue/Liste_Atelier_Vue.php');

