<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "mydatabase");


// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];


// SQL query to insert data into the table
$sql = "INSERT INTO info (name, age, gender) VALUES ('$name', '$age', '$gender')";


if ($conn->query($sql) === TRUE) { echo "Data inserted successfully.";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
 

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
<title>Enter Data</title>
</head>
<style>
body {
font-family: Arial, Helvetica, sans-serif;
}


h2 {
text-align: center;
}


form {
width: 30%;
margin: 0 auto;
}


input[type=text], input[type=number] { width: 100%;
padding: 12px; margin: 6px 0; display: inline-block; border: 1px solid #ccc;
 
box-sizing: border-box;
}


input[type=submit] { width: 100%;
background-color: #4CAF50; color: white;
padding: 12px; margin: 6px 0; border: none; border-radius: 4px; cursor: pointer;
}


input[type=submit]:hover { background-color: #45a049;
}


label {
padding: 12px 12px 12px 0; display: inline-block;
}


.container {
border-radius: 5px; background-color: #f2f2f2; padding: 20px;
}
</style>
<body>
 
<h2>Enter Data</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label for="name">Name:</label>
<input type="text" name="name" required>
<br><br>
<label for="age">Age:</label>
<input type="number" name="age" required>
<br><br>
<label for="gender">Gender:</label>
<input type="text" name="gender" required>
<br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>
