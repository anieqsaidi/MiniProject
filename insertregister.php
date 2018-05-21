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
 

 
$sql="INSERT INTO register (r_name,r_dob,r_phone,r_email,r_pass,r_confirm)
      VALUES
      ('$_POST[r_name]','$_POST[r_dob]','$_POST[r_phone]','$_POST[r_email]','$_POST[r_pass]','$_POST[r_confirm]')";
 
if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>alert('added successfully!')</script>";
	echo "<script type='text/javascript'> window.location='login.php'</script>";
} else {
    echo "Error" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
 