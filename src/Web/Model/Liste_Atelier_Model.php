<?php



function get_Liste_Atelier( )

{
	$sql = "SELECT * FROM Atelier";
    $result = $conn->query($sql);
    
    return  $result ;
    
}






