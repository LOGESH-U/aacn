
<?php 


function runMyFunction() {
    session_start();
session_destroy();
header('location:../index.php');
  }
  if (isset($_GET['logout'])) {
    runMyFunction();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TamilNadu State Mental Health Authority</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/variables.css" />
    <link rel="icon" type="image/png" href="../images/logo.jpg" />
  </head>
  <body>
  <header id="MainTopHeader">
        <div id="headerLeft">
          <div class="mailID">
            <a href="mailto:tnsmha@gmail.com"
              ><span><i class="fas fa-envelope"></i></span>tnsmha@gmail.com</a
            >
          </div>
          <div class="HeadPhone">
            <a href="#">
              <span><i class="fas fa-phone-alt"></i></span>044 26420965</a
            >
          </div>
        </div>
        <div id="headerRight">
          <div class="timeing">
            <a href="#">
              <span><i class="fas fa-clock"></i></span>Mon-Fri 9:00am-06:00pm /
              Closed On Weekends</a
            >
          </div>
          <div id="socialMedia">
            <ul>
              <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-pinterest-square"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
          <div class="adminLogin">
           <?php
            session_start();
            if(!isset($_SESSION['userName'])){
           echo"<a href='../admin_login.php' id='adminLogin_js' 
              >LOGIN</a>";
          }else{
              echo"<a href='../index.php?logout=true' id='adminLogin_js' 
              >LOG OUT</a>";
          }
          ?>
          </div>
        </div>
  </header>
      <script
      src="https://kit.fontawesome.com/aac9d035bc.js"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
</body>
</html>
     