<?php
//define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__DIR__ ."\config.php");


$sql = "CREATE TABLE student (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	
	 username VARCHAR(500),
	email VARCHAR(255) , 
	srn VARCHAR(255),
	hobby VARCHAR(255),
	intrest VARCHAR(255),
	 
   links VARCHAR(255) ,

    
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if ($link->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
mysqli_close($link);

?>
