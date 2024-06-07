<html>
<body>
	<head><style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #ffe6e6;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
		}

		.btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$rs = mysqli_query($conn,"select * from ticket");
echo "<div align=center>";
echo "<table border=1> 
	<tr> 
	<th>Passenger's Phone no</th>
	<th>Passenger's Name</th>
	<th>Passenger's Age</th>
	<th>Passenger's Destination</th>
	</tr>";
while($row=mysqli_fetch_array($rs))
{ 
	echo "<tr>";
		echo "<td align=center>".$row['Phone']."</td>";
		echo "<td align=center>".$row['Name']."</td>";
		echo "<td align=center>".$row['Age']."</td>";
		echo "<td align=center>".$row['Destination']."</td>";
		echo "<td><a href='ticketdel.php?sid=".$row['Phone']."'>Delete</a></td>";
		echo "<td><a href='ticketupdate.php?sid=".$row['Phone']."'>Update</a></td>";
	echo "</tr>";
}
echo "</table>";
?>
<br>
<br>
<a href="ticket.php" class="btn">Go to Form Page</a>
</script>
</body>
</html>
