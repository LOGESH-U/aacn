 <?php
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login=$_POST['username'];
    $password=$_POST['password'];
    
    if($login === 'admin' && $password ==='Admin'){
      echo"working";
      session_start();
      $_SESSION['userName']=$login;
      header('location:../upload/admin_upload.php');
    }
    else if ($login === "" || $password ===""){
      echo"<script>alert('username or password is empty')</script>";
      header('location:admin_login.php?emptyFiled ');
    }
     else if($login !== 'admin' && $password !=='Admin') {
      echo"<script>alert('entered userName or password is wrong')</script>";
      header('location:admin_login.php?wrong uesrName or password ');
    }
    
  }

  
  ?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TamilNadu State Mental Health Authority</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/variables.css" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/png" href="images/logo.jpg" />
  </head>
<body>
  <div class="vh">
      <?php
      require_once('./php_files/top_header.php');
      require_once('./php_files/nav_header.php');
      ?>
      <div class="login">
        <form action="./admin_login.php" name="myForm" method="POST" >
          <div class="loginForm">
            <label for="login">LOGIN</label>
            <input type="text" name='username'value='<?php $login ?>' id="login" placeholder="USER NAME">
            <label for="password">PASSWORD</label>
            <input type="password"name="password" value="<?php $password?>"id="password" placeholder="PASSWORD">
            <div class='showpassword'>
              <label for="showPassword">Show Password</label>
              <input type="checkbox" name="showPassword" id="showPassword" onclick="Password()">
            </div>
            <input type="submit" name="login" value="LOGIN" class="loginBtn">  
            </div> 
        </form>
       </div>
  </div>

 
  <script src="https://kit.fontawesome.com/aac9d035bc.js"crossorigin="anonymous"></script>
  <script src="script.js"></script>


</body>
</html>
