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
 

 
$sql="INSERT INTO booking (b_id, b_name, b_email, b_depart, b_arrive, b_date, b_time, b_pay, b_type, b_card, b_payment, b_receive)
      VALUES
      (null, '$_POST[b_name]', '$_POST[b_email]', '$_POST[b_depart]', '$_POST[b_arrive]', '$_POST[b_date]', '$_POST[b_time]', '$_POST[b_pay]', '$_POST[b_type]', '$_POST[b_card]', '$_POST[b_payment]', '$_POST[b_receive]')";
 
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
 