<?php 
// $file=$_FILES['the_file']['name'];
// $description=$_POST['description'];
// $uploadFolder = "/uploads/";
// $uploadFile = $uploadFolder . basename( $_FILES['the_file']['name']) ;
// $imageFileType = strtolower(pathinfo($uploadFile,PATHINFO_EXTENSION));
// echo $uploadFile;

// if ( $imageFileType=="jpg" || $imageFileType=="png" || $imageFileType=="jpeg"   ) {
//     if($description != ''){
//         if (move_uploaded_file($_FILES["the_file"]["tmp_name"], $uploadFile)) {
//             echo "The file ". htmlspecialchars( basename( $_FILES["the_file"]["name"])). " has been uploaded.";
//             require_once('../php_files/databaseConnection.php');
//             $imageInsertQuery="insert into image_details (image_name,image_description)values($uploadFile,$description);";
//             $outPut=mysqli_query($connection,$imageInsertQuery);
//             // header('location:./admin_upload.php?menu=imageGood');

//         } else {
//             echo "Sorry, there was an error uploading your file.";
//             // header('location:./admin_upload.php?menu=problem');
//         }
//     }else{
//         echo""
//     //  header('location:./admin_upload.php?menu=null');
//     }
// }else {
//     echo "You may only upload image.<br>";
// //    header('location:./admin_upload.php?menu=imageBad');
// }

echo $currentDirectory = getcwd();
$uploadDirectory = "/uploads/";


$errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg','jpg','png','pdf']; // These will be the only file extensions allowed

    $fileName = $_FILES['the_file']['name'];
    $fileSize = $_FILES['the_file']['size'];
    $fileTmpName  = $_FILES['the_file']['tmp_name'];
    $fileType = $_FILES['the_file']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);

    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
            header('location:./admin_upload.php?menuimage=imageOnly');        
      }

      if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
        header('location:./admin_upload.php?menuimage=imageSize');
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
      
        if ($didUpload) {
          echo "The file " . basename($fileName) . " has been uploaded";
            require_once('../php_files/databaseConnection.php');
            $description=$_POST['description'];
            $imageInsertQuery="insert into image_details (image_name,image_description)values('$uploadPath','$description');";
            $outPut=mysqli_query($connection,$imageInsertQuery);
            header('location:./admin_upload.php?menuimage=imageGood');
        } else {
          echo "An error occurred. Please contact the administrator.";
            header('location:./admin_upload.php?menuimage=adminContact');

        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
?>
