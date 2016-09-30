<?php

// On demande la liste des atelier au model
include_once('modele/blog/Liste_Atelier_Model.php');
$ateliers = get_Liste_Atelier( );

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
/*
foreach($ateliers as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
}
*/

// On affiche la page (vue)
include_once('vue/blog/Liste_Atelier_Vue.php');




