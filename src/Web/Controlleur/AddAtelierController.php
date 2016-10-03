<?php
include('../Model/AddAtelierModel.php');

add_Atelier();
echo $_POST['theme'] ;

header('../Vue/AddAtelier.php');
