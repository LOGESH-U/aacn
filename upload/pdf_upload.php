<?php 
require_once('../php_files/databaseConnection.php');
 $currentDirectory = getcwd();
 $uploadFolder = "/pdfuploads/";

 $fileName = $_FILES['file']['name'];
$fileTmpName  = $_FILES['file']['tmp_name'];
$description=$_POST['description'];
$deportment=$_POST['deportment'];


// echo "$file </br>";
// echo "$description </br>";
// echo "$deportment </br>";


echo $uploadPath = $currentDirectory . $uploadFolder . basename($fileName);

$file_type=$_FILES['file']['type'];

if ( $file_type=="application/pdf" && $description !="" && $deportment !="") {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
    if($didUpload){

        echo "The file ". basename( $_FILES['file']['name']). " is uploaded </br>";


        $insertPdfDetailsQuery="insert into pdf_details (description,file_name,deportment) values('$description','$fileName','$deportment')";
        $outPut=mysqli_query($connection,$insertPdfDetailsQuery);
        echo $insertPdfDetailsQuery;
            header('location:./admin_upload.php?error=success ');
    } else{
          echo "Problem uploading file";
        header('location:./admin_upload.php?error=problem ');
    }  
}else {
    header('location:./admin_upload.php?error=emptyField ');
    echo "You may only upload PDFs.<br>";
}


?>