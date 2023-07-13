<?php
// Assuming you have a MySQL database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minang";

// Create a new PDO instance
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Fetch menu data from the database
$query = "SELECT id, nama, harga, gambar FROM menu";
$statement = $pdo->query($query);
$menuItems = $statement->fetchAll(PDO::FETCH_ASSOC);

// Return menu items as JSON
header('Content-Type: application/json');
echo json_encode($menuItems);
?>
