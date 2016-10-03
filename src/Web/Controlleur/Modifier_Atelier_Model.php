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

        //$sql = "UPDATE `atelier` SET `titre_definitif`=$arraydata['titre'],`theme`=$arraydata['theme'],`type`=$arraydata['type'],`date_horaires`=$arraydata['date_horaires'],`remarque`=$arraydata['remarque'],`laboratoire`=$arraydata['laboratoire'],`lieu`=$arraydata['lieu'],`duree`=$arraydata['duree'],`capacite`=$arraydata['capacite'],`inscription`=$arraydata['inscription'],`resume`=resume,`animateur_conferencier`=$arraydata['animateur_conferencier'],`partenaires`=$arraydata['partenaires'],`public_vise`=$arraydata['public_vise'],`cont_ped`=$arraydata['cont_ped'] WHERE 'id'=$arraydata['id']";
   */
     $sql= " ";
    $conn_to_db->query($sql) ;
    
}










