<?php
//--mysqlcon.php
$con=mysqli_connect("localhost","root","","employee");
// Check connection
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
}
// Close Connection
mysqli_close($con);
?>