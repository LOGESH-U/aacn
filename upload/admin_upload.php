<?php
 error_reporting(0);
session_start();
if(!isset($_SESSION['userName'])){
  header('location:../admin_login.php');
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <link rel="stylesheet" href="../css/style.css" />
     <link rel="stylesheet" href="../css/admin_upload.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/variables.css" />
    <link rel="icon" type="image/png" href="../images/logo.jpg" />
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<body>
  <?php
      require_once('../php_files/databaseConnection.php');
      require_once('../php_files/top_header.php');
      require_once('../php_files/nav_header.php');
  ?>
  <div class="upload"> <input type="hidden" name="hidmenuname" id="hidmenuname" value = "<?php echo $menudisp; ?>">
      <aside class="asideNav">
        <div class="heading">menu</div>
        <!-- upload option -->
        <div class="uploadOption">
          <button type="button" class="collapsible" onclick=upload()>upload files</button>
          <div class="content flex up">
            <button class="uploadPdf" onclick=uploadPDF()>Upload PDF</button>
            <button class="uploadImages" onclick="uploadImage()">Upload Images</button>
          </div>
        </div>
        <!-- download option -->
        <div class="uploadOption">
          <button type="button" class="collapsible" onclick=download()>download files</button> 
          <div class="content flex down">
            <button class="downloadPdf" onclick=downloadPDF()>download PDF</button>
            <button class="downloadImages" onclick=downloadImage()>download Images</button>
          </div>
        </div>
        <!-- registration View option -->
        <div class="uploadOption">
          <button type="button" class="collapsible" onclick=registrationView()>Registration View</button>
          <div class="content flex regiView">
            <button class="viewrig" onclick=viewRegistration()>View</button>
          </div>
        </div>
         <!-- news upload  option -->
         <div class="uploadOption">
          <button type="button" class="collapsible" onclick=newsUpload()>news & updates</button> 
          <div class="content flex uploadNews">
            <button class="viewUpload" onclick=viewNewsUpload()>upload news</button>
          </div>
        </div>
        <!-- contactUs list  option -->
         <div class="uploadOption">
          <button type="button" class="collapsible" onclick=showContactUs()>contact-Us list</button> 
          <div class="content flex showContactUs">
            <button class="showContactList" onclick=showContactUsList()>show contact</button>
          </div>
        </div> 
      </aside>
      <section>
          <div class="pdfUpload">
            <form action="./pdf_upload.php" method="post" enctype="multipart/form-data">
            <p class="uploadHeading">pdf upload section</p>
            <div>
                  <label for="file" class="uploadLabel">Upload a File:</label> 
                  <input type="file" name="file" id="fileToUpload">
            </div>
            <div>
              <label for="description" class="description">description:</label>
              <input type="text" name="description" id="description">
            </div>
            <div>
              <label for="deportment" class="deportment">deportment:</label>
                <select name="deportment" id="position" >
                  <option value="mental_health_professional_registration">Mental Health Professional Registration</option>
                  <option value="mental_health_establishment_registration">Mental Health Establishment Registration</option>
                    <option value="forms">Forms</option>
                    <option value="rules_and_regulation_act">Rules and Regulation 
                      Act</option>
                </select>
            </div>
              <input type="submit" name="submit" value="Start Upload" class="uploadBtn">
            </form>
          </div>
          <div class="imageUpload">
        
            <form action="image_upload.php" method="post" enctype="multipart/form-data">
            <p class="uploadHeading">image upload section</p>
            <div>
                  <label for="the_file" class="uploadLabel">select image:</label> 
                  <input type="file" name="the_file" id="fileToUpload">
            </div>
            <div>
                  <label for="description" class="description">description:</label>
                <input type="text" name="description" id="description">
            </div>
              <input type="submit" name="submit" value="Start Upload" class="uploadBtn">
            </form>
          </div>
          <div class="registrationView">
              <?php 
              $sqlQuery="SELECT * FROM registration_form";
              $outPut=mysqli_query($connection,$sqlQuery);
              $totalRow=mysqli_num_rows($outPut);
              ?>
              <div class="regView">
                <table class="table table-striped">              
                    <thead>
                      <tr>
                        <th scope="col" style="padding-left:2rem !important">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Address</th>
                        <th scope="col">Hospital Name</th>
                        <th scope="col">Position</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                  <tbody>
                    <?php
                      if($totalRow>0){
                          $count=1;
                          while($displayAll=mysqli_fetch_assoc($outPut)){
                            echo"<tr>";
                            echo "<td class='rowSpace '>".$count++."</td>";
                            echo "<td class='rowSpace three '>".$displayAll['Name']."</td>";
                            echo "<td class='rowSpace  '>".$displayAll['Email_ID']."</td>";
                            echo "<td class='rowSpace two'>".$displayAll['Phone_Number']."</td>";
                            echo "<td class='rowSpace '>".$displayAll['Address']."</td>";
                            echo "<td class='rowSpace  '>".$displayAll['Hospital_Name']."</td>";
                            echo "<td class='rowSpace '>".$displayAll['Position']."</td>";
                            echo "<td class='rowSpace admin-btn'><button onClick="."window.location.href='../Registration.php?id=".$displayAll['ID']."'>EDIT</button></td>";
                           echo "<td class='rowSpace admin-btn'><button onClick="."window.location.href='../Registration.php?DeleteId=".$displayAll['ID']."'>DELETE</button></td>";
                            echo"</tr>";
                          }     
                        };
                    ?>   
                    </tbody>
                  </table>
              </div>
          </div>
          <div class="newsAndUpdate">
            <div class="newsCenter">
              <div class="newsUpdateSection">
                <form method="post" action="./news_and_updates.php" class="newsForm">                
                  <div class="newHeading">
                    <label for="newsHeading">Title</label>
                    <input type="text" id= 'newsHeading' name='newsHeading' >
                  </div>
                  <div class="newsDescription">
                    <label for="newsTextArea">Description</label>
                    <textarea id= 'newsTextArea' name="newsTextArea" class="textAre" ">

                    </textarea>
                    <input type="hidden" name='newsID' id= 'newsID' >
                  </div>
                  <button>submit</button>
                </form>
              </div>
              <div class="newsListSection">
               <?php 
               $sqlQuery="SELECT * FROM news_and_Updates order by ID desc;";
                $outPut=mysqli_query($connection,$sqlQuery);
                $totalRow=mysqli_num_rows($outPut);
                if($totalRow>0){
                  while($displayAll=mysqli_fetch_assoc($outPut)){ 
                     $title =  trim($displayAll['TITLE']);
                      $newsid =  trim($displayAll['ID']);
                     $message = trim($displayAll['MESSAGE']);
                   echo"<div class='container'>
                    <div class='headingTime'>
                    <h1> ".$displayAll['TITLE']."</h2>
                    <h6>".$displayAll['TIME']."</h6>
                  </div>
                  <h5>".$displayAll['MESSAGE']." </h5>
                  <div class='hoverItems'>";
                   echo" <div class='edit' ><button onClick=\"EditClick('".$title."','".$message."','".$newsid."');\">Edit</button></div>
                    <div class='delete'onClick="."document.location.href='./updateNews.php?deleteId=".$displayAll['ID']."'><button>Delete</button></div>
                  </div>
                </div>";
                  }
                }
               ?>
              </div>
            </div>
          </div>
          <div class="show-contactUs-list">
            <div class="contactUs-list-container">
             <?php 
              $contactUsSqlQuery="SELECT * FROM contact_us";
              $ContactUsOutPut=mysqli_query($connection,$contactUsSqlQuery);
              $ContactUsTotalRow=mysqli_num_rows($ContactUsOutPut);
              ?>
              <div class="regView">
                <table class="table table-striped">              
                    <thead>
                      <div class='whiteBG'>
                        <tr> 
                          <th scope="col" style="padding-left:2rem !important">#</th>
                          <th scope="col">NAME</th>
                          <th scope="col">EMAIL ID</th>
                          <th scope="col">PHONE NO</th>
                          <th scope="col">MESSAGE</th>
                          <th scope="col"></th>
                        </tr>
                      </div>
                    </thead>
                  <tbody>
                    <?php
                      if($ContactUsTotalRow>0){
                          $count=1;
                          while($displayAll=mysqli_fetch_assoc($ContactUsOutPut)){
                            echo"<tr>";
                            echo "<td class='rowSpace '>".$count++."</td>";
                            echo "<td class='rowSpace three '>".$displayAll['User_Name']."</td>";
                            echo "<td class='rowSpace two '>".$displayAll['Email_ID']."</td>";
                            echo "<td class='rowSpace two'>".$displayAll['Phone_No']."</td>";
                            echo "<td class='rowSpace '>".$displayAll['Message']."</td>";
                            echo"<td class='rowSpace one admin-btn'><button onClick="."document.location.href='./contactUs.php?ContactDeleteId=".$displayAll['id']."'>delete</button></td";
                            echo"</tr>";
                          }     
                        };
                    ?>               
                    </tbody>
                  </table>
                </div>
            </div>
                <p class='end-of-list'>end of list</p>

          </div>
      </section>
  </div>

  
  <script src="../script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
     
   