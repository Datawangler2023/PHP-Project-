<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dbtest";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="UPDATE ticket SET Age='19' WHERE Age='18'";
mysqli_query($conn,$sql);
header('location:ticketlist.php');
?>