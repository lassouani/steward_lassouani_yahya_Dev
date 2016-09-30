 <?php
$servername = "localhost";
$username = "ssy_cdp";
$password = "";
$dbname = "CDP_DB";


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql_db = "CREATE DATABASE CDP_DB";
if ($conn->query($sql_db) === TRUE) {
    echo nl2br("Database created successfully \n");
    

    // Create connection to the new created database
	$conn_to_db = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn_to_db->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


    // sql to create table
	$sql_table = "CREATE TABLE Atelier (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	titre_definitif VARCHAR(100) NOT NULL,
	theme VARCHAR(100) NOT NULL,
	type VARCHAR(50) NOT NULL,
	date_horaires VARCHAR(100) NOT NULL,
	remarque VARCHAR(100) ,
	laboratoire VARCHAR(100) NOT NULL,
	lieu VARCHAR(200) NOT NULL,
	duree VARCHAR(30) NOT NULL,
	capacite TINYINT(3) UNSIGNED NOT NULL,
	inscription VARCHAR(50) NOT NULL,
	resume TEXT NOT NULL,
	animateur_conferencier VARCHAR(100) NOT NULL,
	partenaires VARCHAR(100),
	public_vise VARCHAR(100) NOT NULL,
	cont_ped VARCHAR(50) NOT NULL
	)";
	// cont_ped = contenu pedagogique et disciplines scolaires visÃ©es
	
	if ($conn_to_db->query($sql_table) === TRUE) {
		echo nl2br("Table Atelier created successfully \n");
	} else {
		echo "Error creating table: \n" . $conn_to_db->error;
	}
	
	// sql to insert data
	$sql_insert = "INSERT INTO Atelier (titre_definitif, theme, type, 
	date_horaires, remarque, laboratoire, lieu, duree, capacite, 
	inscription, resume, animateur_conferencier, partenaires, public_vise, 
	cont_ped)
	VALUES (
	'Liquides durs et solides mous',
	 'Decouverte des fluides complexes, gels, materiaux',
	 'Atelier scientifique', 
	 'Mardi matin, Mardi apres-midi, Jeudi apres-midi', 
	 '',
	 'Paul pascal, CNRS',
	 'Zone D, Doyen brus', 
	 '30 min',
	 12,
	 'sur reservation',
	 'Les fluides complexes nous ....', 
	 'Martin, Toto', 
	 '',
	 '2nde, 1re', 
	 'Chimie' 
	 );";

	 $sql_insert .= "INSERT INTO Atelier (titre_definitif, theme, type, 
	date_horaires, remarque, laboratoire, lieu, duree, capacite, 
	inscription, resume, animateur_conferencier, partenaires, public_vise, 
	cont_ped)
	VALUES (
	'Liquides durs et solides mous',
	 'Decouverte des fluides complexes, gels, materiaux',
	 'Atelier scientifique', 
	 'Mercredi matin, Mardi apres-midi, Vendredi apres-midi', 
	 '',
	 'Pierre Jean, CNRS',
	 'Zone D, Doyen brus', 
	 '1h',
	 17,
	 'sur reservation',
	 'Les fluides complexes nous ....', 
	 'Martin, Titi', 
	 '',
	 'Tale', 
	 'Chimie' 
	 );";
	

	if ($conn_to_db->multi_query($sql_insert) === TRUE) {
		echo nl2br("New records created successfully \n");
	} else {
		echo "Error: " . $sql_insert . "<br>" . $conn_to_db->error;
	}

	$conn_to_db->close();
} else {
    echo nl2br("Error creating database: \n" . $conn->error);
}

$conn->close();
?> 
