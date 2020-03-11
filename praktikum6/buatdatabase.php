<?php
$servername = "localhost";
$username = "root";

//create koneksi
$conn = mysqli_connect($servername, $username,"");

//cek koneksi
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}

//create database
$sql = "CREATE DATABASE my_data";
if (mysqli_query($conn, $sql)){
	echo "Database Create Successfully";
} else {
	echo "Error Creating Database: ". mysqli_error($conn);
}
mysqli_close($conn);
?>