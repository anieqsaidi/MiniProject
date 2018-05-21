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
 

 
$sql="INSERT INTO lost_property (l_id, l_name, l_email, l_phone, l_add1, l_add2, l_month, l_day, l_year, l_time, l_lost, l_desc)
      VALUES
      (null, '$_POST[l_name]', '$_POST[l_email]', '$_POST[l_phone]', '$_POST[l_add1]', '$_POST[l_add2]', '$_POST[l_month]', '$_POST[l_day]', '$_POST[l_year]', '$_POST[l_time]', '$_POST[l_lost]', '$_POST[l_desc]')";
 
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
 