
<?php

// On demande la liste des atelier au model
include_once('../Model/Liste_Atelier_Model.php');
$ateliers = get_Liste_Atelier();

if (isset($_POST['atelier_id'])) {
    delete_Atelier();
}

function delete_Atelier() {
    $deleted = delete_Atelier_Model($_POST['atelier_id']);
    if ($deleted) {
        header('Location: ../Vue/Liste_Atelier_Vue.php');
    } else {
        header('Refresh:5; url=../Vue/Liste_Atelier_Vue.php');
        echo "Il y a eu une erreur, veuillez contacter l'administrateur : admin@nomdedomaine.com";
    }
}
