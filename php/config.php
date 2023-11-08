<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    echo "Koneksi database error" . mysqli_connect_error();
}
?>