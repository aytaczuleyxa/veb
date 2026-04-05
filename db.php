<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "istifadeci_bazasi";

// Bağlantını yaradırıq
$conn = mysqli_connect($host, $user, $pass, $db_name);

// Əgər bağlantı uğursuzdursa, dərhal dayandır və xətanı de
if (!$conn) {
    die("Bazaya qoşulma alınmadı: " . mysqli_connect_error());
}
?>
