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
 

 
$sql="INSERT INTO feedback(f_name,f_phone,f_email,f_msg)
      VALUES
      ('$_POST[f_name]','$_POST[f_phone]','$_POST[f_email]','$_POST[f_msg]')";
 
if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>alert('added successfully!')</script>";
	echo "<script type='text/javascript'> window.location='feedback.php'</script>";
} else {
    echo "Error" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
 