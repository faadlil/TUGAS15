<?php 

$servername = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'day14';

$conn = new mysqli($servername, $username, $password, $database);

if ($conn -> connect_error) {
	echo "GAGAL KONEK KE DATABASE";
}

 ?>