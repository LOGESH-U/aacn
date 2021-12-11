<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>TamilNadu State Mental Health Authority</title>
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/reset.css" />
      <link rel="stylesheet" href="css/variables.css" />
      <link rel="icon" type="image/png" href="images/logo.jpg" />
      <link rel="stylesheet" href="css/Registration.css">
   </head>
   <body>
      <?php
      error_reporting(0);
         require_once('./php_files/top_header.php');
         require_once('./php_files/nav_header.php');
      ?>
      <!-- <div class="registrationForm">
        <p class="regForm"> Registration form</p>
         <form action="./php_files/registration_upload.php" id="registerFrom" method="POST">
            <div class="container">
               <label for="name">Name</label>
               <input type="text" name="name"  <?php echo"value='$userName' " ?> id="regName" required>
            </div>
            <div class="container">
               <label for="email">Email</label>
               <input type="email" name="email"   id="regMail"  <?php echo"value='$email''" ?> required>
            </div>
            <div class="container">
               <label for="phone">Phone</label>
               <input type="tel" name="phone" id="regPhone" pattern="[0-9]{10}"  <?php echo"value='$PhoneNO' ' " ?>" required>
            </div>
            <div class="container">
               <label for="address">Address</label>
               <input type="text" name="address"  <?php echo"value='$Address' " ?> id="regAddress" required>
            </div>
            <div class="container"> 
               <label for="hospitalname">Hospital Name</label>
               <input type="text"  <?php echo"value='$HospitalName'  "?>" name="hospitalName" id="hospitalName" required>
            </div>
            <div class="container">
               <label for="position">Position</label>
               <select name="position" id="position"  <?php echo"value='$Position'" ?>>
                  <option value="Chairman"> Chairman</option>
                  <option value="Member"> Member</option>
               </select>
            </div>
            <input type="submit" name="submit" id="submit">
         </form>
      </div> -->
      <?php
            session_start();
            if(!isset($_SESSION['userName'])){
          echo" <div class='registrationForm'>
        <p class='regForm'> Registration form</p>
         <form action='./php_files/registration_upload.php' id='registerFrom' method='POST'>
            <div class='container'>
               <label for='name'>Name</label>
               <input type='text' name='name' id='regName' required>
            </div>
            <div class='container'>
               <label for='email'>Email</label>
               <input type='email' name='email'   id='regMail'  required>
            </div>
            <div class='container'>
               <label for='phone'>Phone</label>
               <input type='tel' name='phone' id='regPhone' pattern='[0-9]{10}'  required>
            </div>
            <div class='container'>
               <label for='address'>Address</label>
               <input type='text' name='address'  id='regAddress' required>
            </div>
            <div class='container'> 
               <label for='hospitalname'>Hospital Name</label>
               <input type='text' name='hospitalName' id='hospitalName' required>
            </div>
            <div class='container'>
               <label for='position'>Position</label>
               <select name='position' id='position'>
                  <option value='Chairman'> Chairman</option>
                  <option value='Member'> Member</option>
               </select>
            </div>
            <input type='submit' name='submit' id='submit'>
         </form>
      </div>";
          }else{
               require_once('./php_files/databaseConnection.php');
               $ID=$_GET['id'];
               $selectQuery="select * from registration_form where ID=$ID";
               $outPut=mysqli_query($connection,$selectQuery);
               $displayAll=mysqli_fetch_assoc($outPut);
               $name=$displayAll['Name'];
               $address=$displayAll['Address'];
               $HospitalName=$displayAll['Hospital_Name'];
              echo" <div class='registrationForm'>
        <p class='regForm'> Registration form</p>
         <form action='./php_files/registration_upload.php?id=$ID' id='registerFrom' method='POST'>
            <div class='container'>
               <label for='name'>Name</label>
               <input type='text' id='regName' value='$name' disabled required>
            </div>
            <div class='container'>
               <label for='email'>Email</label>
               <input type='email' value=".$displayAll['Email_ID']."   id='regMail' disabled required>
            </div>
            <div class='container'>
               <label for='phone'>Phone</label>
               <input type='tel' id='regPhone' pattern='[0-9]{10}' disabled value=".$displayAll['Phone_Number']."  required>
            </div>
            <div class='container'>
               <label for='address'>Address</label>
               <input type='text'   id='regAddress'disabled value='$address' required>
            </div>
            <div class='container'> 
               <label for='hospitalname'>Hospital Name</label>
               <input type='text'  id='hospitalName'disabled value='$HospitalName' required>
            </div>
            <div class='container'>
               <label for='position'>Position</label>
               <select id='position' disabled>
                  <option> ".$displayAll['Position']."</option>
                  
               </select>
            </div>
            <div class='container'>
            <label for='viewApproval'>View Approval</label>
               <select name='viewApproval' id='position'>
                  <option value='EXECUTIVE DOCTOR CHECKED'>Executive Doctor Checked</option>
                  <option value='NORMAL MEMBER'>Normal Member</option>
               </select>
            </div>
            <input type='submit' name='submit' id='submit'>
         </form>
      </div>";
          }
          ?>
   </body>
</html>