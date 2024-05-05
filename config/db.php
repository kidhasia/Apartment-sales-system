
<!-- Estabilishing a connection to MySQL database and chack wheather the connection was successfull  -->
<?php

$user = 'root';
$pass = '';
$host = 'localhost';
$db = 'apartment_system';


$conn = mysqli_connect("localhost", "root","", "apartment_system");

if ($conn->connect_error) {
   die("Connection Failed".$con->connect_error);// To remove above database if any issue occured
} 
else{
    echo 'Connected';
}
?>
