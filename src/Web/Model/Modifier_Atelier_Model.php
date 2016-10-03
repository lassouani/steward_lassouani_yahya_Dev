 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cdp_db";


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    

    // Create connection to the new created database
  $conn_to_db = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn_to_db->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }



//fonction
function update_Atelier( $arraydata )

{

    global $conn_to_db;
    
/*
    $ID=$arraydata['id'];
    $theme=$arraydata['theme'];
    $titre=$arraydata['titre_definitif'];
    $theme=$arraydata['theme'];
    $type=$arraydata['type'];
    $date_h=$arraydata['date_h'];
    $remarque=$arraydata['remarque'];
    $laboratoire=$arraydata['laboratoire'];
    $lieu=$arraydata['lieu'];
    $duree=$arraydata['duree'];
    $capacite=$arraydata['capacite'];
    $inscription=$arraydata['inscription'];
    $resume=$arraydata['resume'];
    $animateur_conferencier=$arraydata['animateur_conferencier'];
    $partenaires=$arraydata['partenaires'];
    $public_vise=$arraydata['public_vise'];
    $cont_ped=$arraydata['cont_ped'];


     $sql = "UPDATE produits SET * = :titre, :theme, :type, :date_h, :remarque, :lboratoire, :lieu, :duree, :capacite, :inscription, :resume, :animateur_conferencier; :partenaires, :public_vise, :cont_ped WHERE id=:ID";
*/

     /* gain de temp spéctaculaire avec cette methode */
      /*$id = $arraydata['id'];
      unset($arraydata['id']);
      $setStatment = array();
      foreach($arraydata as $key => $value) {
        $setStatment[] = '`'.$key."` = '".addslashes($value)."'";
      }
      var_dump($setStatment);
      $statment = implode(', ', $setStatment);

      echo $statment;

      $sql = "UPDATE atelier SET ".$statment."
              WHERE id = ".$id; 
      */

      $sql = "UPDATE `atelier` SET `titre_definitif`= '".addslashes($arraydata['titre_definitif'])."',
                  `theme`= '".addslashes($arraydata['theme'])."',
                  `type`='".addslashes($arraydata['type'])."',
                  `date_horaires`= '".addslashes($arraydata['date_horaires'])."',
                  `remarque`= '".addslashes($arraydata['remarque'])."',
                  `laboratoire`= '".addslashes($arraydata['laboratoire'])."',
                  `lieu`= '".addslashes($arraydata['lieu'])."',
                  `duree`= '".addslashes($arraydata['duree'])."',
                  `capacite`= '".addslashes($arraydata['capacite'])."',
                  `inscription`= '".addslashes($arraydata['inscription'])."',
                  `resume`= '".addslashes($arraydata['resume'])."',
                  `animateur_conferencier`= '".addslashes($arraydata['animateur_conferencier'])."',
                  `partenaires`= '".addslashes($arraydata['partenaires'])."',
                  `public_vise`='".addslashes($arraydata['public_vise'])."',
                  `cont_ped`='".addslashes($arraydata['cont_ped'])."'
                       WHERE id=".intval($arraydata['id']);
   
   
    $conn_to_db->query($sql) ;
    
}










