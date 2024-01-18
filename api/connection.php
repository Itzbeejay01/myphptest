<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpassword = 'root';
$dbname = 'passport'; 
$dbport = 8889;

$connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $dbport);
if (mysqli_connect_errno()) {
   echo 'Errno: '.$mysqli->connect_errno;
echo "<div style='background-color:red;color:white;text-align:center; padding: 7px'> Database not connected!</div>";
//exit();
} else {
   echo "<div style='background-color:green;color:white;text-align:center; padding: 7px'>Database connected</div>";
}
?>