<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "restoran";

// Create connection using mysqli
$koneksi = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}


?>