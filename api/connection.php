<?php
$dbhost = 'db4free.net';
$dbuser = 'jabucsc';
$dbpassword = 'Jabucsc123@';
$dbname = 'jabucsc'; 
$dbport = 3306;


$connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $dbport);
if (mysqli_connect_errno()) {
   echo 'Errno: '.$mysqli->connect_errno;
echo "<div style='background-color:red;color:white;text-align:center; padding: 7px'> Database not connected!</div>";
//exit();
} else {
   echo "<div style='background-color:green;color:white;text-align:center; padding: 7px'>Database connected</div>";
}
?>
