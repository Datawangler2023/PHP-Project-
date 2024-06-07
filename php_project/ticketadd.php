<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO ticket VALUES (".$_GET['phone'].",'".$_GET['name']."',".$_GET['age'].",'".$_GET['destination']."')";
mysqli_query($conn, $sql);
header('location:ticketlist.php');
?>

