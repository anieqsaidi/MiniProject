<html>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taxi_car";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 

 
$sql="INSERT INTO login (log_name, log_pass)
      VALUES
      ('$_POST[log_name]','$_POST[log_pass]')";
 
if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>alert('added successfully!')</script>";
	echo "<script type='text/javascript'> window.location='book.php'</script>";
} else {
    echo "Error" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
 