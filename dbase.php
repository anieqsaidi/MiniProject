<!-- dbase.php -->
<!-- To connect between php scripting and database. -->
<?php

define("DATABASE_HOST", "localhost");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");

$conn = mysql_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD);

if(!$conn){
 die("Could not connect to database");
}

mysql_select_db("taxi_car", $conn) or die("Could not connect to database");

date_default_timezone_set('Asia/Kuala_Lumpur');
?>