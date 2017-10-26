<?php 

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "perpus2";
// Buat Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek Koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";



?>