<?php 
require_once('../php_files/databaseConnection.php');
error_reporting(0);

$deleteID=$_GET['deleteId'];
$editID=$_GET['editId'];


if($deleteID!=='' && $editID ==''){
    $deleteQuery="delete from news_and_Updates where id='$deleteID'";
    $outPut=mysqli_query($connection,$deleteQuery);
    header('location:./admin_upload.php?message=deleteSuccess ');
}elseif($editID!=='' && $deleteID ==''){
    
    $editQuery="select TITLE,MESSAGE from news_and_Updates where id='$editID'";
    $outPut=mysqli_query($connection,$editQuery);
    echo $totalRow=mysqli_num_rows($outPut);
     if($totalRow>0){
         while($displayAll=mysqli_fetch_assoc($outPut)){ 
             $headerValue=$displayAll['TITLE'];
             $messageValue=$displayAll['MESSAGE'];
             echo $headerValue .'<br/>'.$messageValue;
            header('location:./admin_upload.php?message=editing&headerValue='.$headerValue.'&messageValue='. $messageValue. '<Script>document.querySelector(".newsAndUpdate").style.display = "block";</script>' );
         }
     }
}

?>