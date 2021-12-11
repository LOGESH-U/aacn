<?php 

$dbHost ='sg2nlmysql29plsk.secureserver.net:3306';
$dbUserName='aacndatabase';
$dbPassword='2ko1$d4V';
$dbName='aacndb';

//database connection
$connection=mysqli_connect($dbHost,$dbUserName,$dbPassword,$dbName);

//database connection check
if($connection){
// echo"connection is good";
}else{
  echo"Database Is Not Connected";
}
?>
