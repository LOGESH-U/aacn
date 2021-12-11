<?php 
require_once('../php_files/databaseConnection.php');
$title=$_POST['newsHeading'];
$message=$_POST['newsTextArea'];
$newsid="";
 $newsid= $_POST['newsID'];

//echo "NEWSID:::".$newsid .'</br>';
date_default_timezone_set("Asia/Kolkata");
$date = date('d-m-Y H:i:s');
echo $title.'</br>'.$message.'</br>'.$date;
if($title !=='' && $message !=='' && $newsid ==""){    
    $newsInsertQuery="insert into news_and_Updates(title,message,time) values('$title','$message','$date');";
    $outPut=mysqli_query($connection,$newsInsertQuery);
    header('location:./admin_upload.php?message=success ');
}elseif ($title !=='' && $message !=='' && $newsid !==""){ echo $newsid;
 $query = "UPDATE  news_and_Updates SET  TITLE = '$title' , MESSAGE = '$message' WHERE ID = $newsid ";
    $outPut=mysqli_query($connection,$query);
    header('location:./admin_upload.php?newsmessage=success ');
}elseif($title==='' || $message===''){
    header('location:./admin_upload.php?newsmessage=empty ');
}else{
    header('location:./admin_upload.php?newsmessage=problem ');
}

?>