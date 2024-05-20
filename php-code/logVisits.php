<?php
// alles instellen op de juiste manier. zo verzekeren we een correcte verbinding met de databank.
$servername = "mysql";
$username = "root";
$password = "rootWord";
$dbname = "visitors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// visitor's IP address verkrijgen
$ip_address = $_SERVER['REMOTE_ADDR'] ?? "Unknown IP-adress";

// Insert het IP address in de database
$sql = "INSERT INTO visits (ip_address) VALUES ('$ip_address')";
//even loggen dat het gelukt is zodat we dit weten.
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
