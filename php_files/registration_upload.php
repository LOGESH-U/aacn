<?php 
require_once('../php_files/databaseConnection.php');
require_once('../php_files/top_header.php');
require_once('../php_files/nav_header.php');
?>
<style>
.center{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-transform:capitalize;
    font-size: 1.8rem;
    font-weight: 500;
    height: 80vh;
    box-sizing: border-box;
    z-index: -1000;

}
.redirect{
    margin-top: 2rem ;
    text-decoration: none;
    
}
</style>
<?php
session_start();
if(!isset($_SESSION['userName'])){
        if(isset($_POST['submit'])){    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $hospitalName=$_POST['hospitalName'];
    $position=$_POST['position'];
   

    // checking email  is already exit or not
    $checkEmailDuplicateQuery="select Email_ID from registration_form where email_id='$email';";
    $outPutEmailDuplicate=mysqli_query($connection,$checkEmailDuplicateQuery);
    $EmailRowCount=mysqli_num_rows($outPutEmailDuplicate);

    // checking phone is already exit or not
    $checkPhoneNumberDuplicateQuery="select Phone_Number from registration_form where phone_number='$phone';";
    $outPutPhoneNumberDuplicate=mysqli_query($connection,$checkPhoneNumberDuplicateQuery);
    $PhoneRowCount=mysqli_num_rows($outPutPhoneNumberDuplicate);

    //insert statement
    $insertQuery="INSERT INTO registration_form(Name,Email_ID,Phone_Number,Address,Hospital_Name,Position)
    values('$name','$email',$phone,'$address','$hospitalName','$position') ";

    //condition for insert and duplicate checking
    echo"<div class='center'>";
    if($EmailRowCount!=0){
        echo"this mail id is already registered please give another email id </br>";
        echo"</br><a href='../Registration.php'class='redirect'>Back to Registration Page</a>";
    }elseif($PhoneRowCount!=0){
        echo"this phone number is already registered please give another phone number </br>";
        echo"</br><a href='../Registration.php'class='redirect'>Back to Registration Page</a>";
    }else{
        echo"registration is successful";
        $outPut=mysqli_query($connection,$insertQuery);
    }
    echo"</div>";
    }
}else{
     $viewApproval=$_POST['viewApproval'];
     $ID=$_GET['id'];
     $deleteId=$_GET['DeleteId']; 
     
     if(!$viewApproval==''&& !$ID==''){ 
         $updateQuery="update registration_form set View_Approval='$viewApproval' where ID='$ID'";
         $outPutUpdate=mysqli_query($connection,$updateQuery);
         echo "<div class='center'>View Updated Successful</div>";
        }else{
            echo"<div class='center'>something went wrong</div>";
        }
       
}
?>