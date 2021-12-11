<?php 
require_once('../php_files/databaseConnection.php');
error_reporting(0);

$contactDeleteID=$_GET['ContactDeleteId'];

if($deleteID!==''){
    $deleteQuery="delete from contact_us where id='$contactDeleteID'";
    $outPut=mysqli_query($connection,$deleteQuery);
    header('location:./admin_upload.php?message=deleteSuccess ');
}

?>