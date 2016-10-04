<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CDP_DB";


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
function get_Liste_Atelier() {

    global $conn_to_db;
    $sql = "SELECT * FROM Atelier";
    $result = $conn_to_db->query($sql);

    return $result;
}

function delete_Atelier_Model($id) {
    var_dump($id);
    global $conn_to_db;
    $return = true;
    // sql to delete a record
    $sql = "DELETE FROM Atelier WHERE id=" . $id;
    $conn_to_db->query($sql);

    if ($conn_to_db->query($sql) === FALSE) {
        $return = false;
    }

    return $return;
}
