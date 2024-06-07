
<!DOCTYPE html>
<html>
<head>
        <title>Railway Ticket Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            
            background-size: cover;
            background-position: center;
        }

        .container {
            width: 50%;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"], input[type="number"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Railway Ticket Booking</h2>
        <form name="frm1" Action="ticketadd.php" method="GET">
<label for="age">Passenger Phone no:</label>
            <input type="number" id="phone" name="phone" placeholder="Enter your phone no." required>
            <label for="name">Passenger Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="age">Passenger Age:</label>
            <input type="number" id="age" name="age" placeholder="Enter your age" required>

            <label for="destination">Destination:</label>
            <input type="text" id="departure" name="destination" placeholder="Enter destination " required>
       
            <input type="submit" value="Book Ticket">
        </form>
    </div>
</body>
</html>
