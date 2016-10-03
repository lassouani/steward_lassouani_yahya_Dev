 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CDP_DB";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    

    // Create connection to the new created database
//  $conn_to_db = new mysqli($servername, $username, $password, $dbname);
  // Check connection
 // if ($conn_to_db->connect_error) {
    //  die("Connection failed: " . $conn->connect_error);
 // }
 
function add_Atelier()
{
   
  global $conn;
  
	if (!empty($_POST))
	{
	$titre_definitif = $_POST['titre_definitif'];
	$theme = $_POST['theme'];
	$type = $_POST['type'];
	$date_horaires = $_POST['date_horaires'];
	$remarque = $_POST['remarque'];
	$capacite = $_POST['capacite'];
	$resume = $_POST['resume'];
	$laboratoire = $_POST['laboratoire'];
	$inscription = $_POST['inscription'];
	$cont_ped = $_POST['cont_ped'];
	$public_vise = $_POST['public_vise'];
	$partenaires = $_POST['partenaires'];
	$animateur_conferencier = $_POST['animateur_conferencier'];
	$duree = $_POST['duree'];
	$lieu = $_POST['lieu'];

    global $conn;
$sql = "INSERT INTO atelier (titre_definitif,theme,type,date_horaires,remarque,laboratoire,lieu,duree,capacite,inscription,resume,animateur_conferencier,partenaires,public_vise,cont_ped)
VALUES (\"".$titre_definitif."\",
			\"".$theme."\",
			\"".$type."\",
			\"".$date_horaires."\",
			\"".$remarque."\",
			\"".$laboratoire."\",
			\"".$lieu."\",
			\"".$duree."\",
			\"".$capacite."\",
			\"".$inscription."\",
			\"".$resume."\",
			\"".$animateur_conferencier."\",
			\"".$partenaires."\",
			\"".$public_vise."\",
			\"".$cont_ped."\")";
			
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

			
			
$result = mysqli_query($conn, $sql);

echo $result;

return $result;
}

header('Location: ../Controlleur/AddAtelierController.php');
}