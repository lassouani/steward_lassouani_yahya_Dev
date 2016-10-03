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

    

//function add_Atelier()
//{
	
    global $conn;
	if(!empty($_POST)){	
$sql = "INSERT INTO atelier (titre_definitif,theme,type,date_horaires,remarque,laboratoire,lieu,duree,capacite,inscription,resume,animateur_conferencier,partenaires,public_vise,cont_ped)
VALUES ('".$_POST['titre_definitif'].",
			'fgggg',
			".$_POST['type'].",
			".$_POST['date_horaires'].",
			".$_POST['remarque'].",
			".$_POST['laboratoire'].",
			".$_POST['lieu'].",
			".$_POST['duree'].",
			".$_POST['capacite'].",
			".$_POST['inscription'].",
			".$_POST['resume'].",
			".$_POST['animateur_conferencier'].",
			".$_POST['partenaires'].",
			".$_POST['public_vise'].",
			".$_POST['cont_ped'].")";
$result = mysqli_query($conn, $sql);

echo $result;

//return $result;
	//}
}
	//header('Location: ../Vue/Liste_Atelier_Vue.php');
?>