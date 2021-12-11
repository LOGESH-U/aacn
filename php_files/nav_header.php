<nav id="mainNav">
        <ul>
          <li>
            <a href="../index.php">
              <img src="../images/logo.jpg" alt="logo" class="nav_logo" />Tamilnadu
              State <br />
              Mental Health Authority
            </a>
          </li>
        </ul>
        <div class="dropdown">
          <button
            class="dropbtn home"
            onclick="window.location.href='../index.php'"
          >home
          </button>
        </div>
        <div class="dropdown">
          <button class="dropbtn aboutUs" onclick="window.location.href='../about_us.php'">about us</button>
          <div class="dropdown-content">
            <a href="../who_we_are.php">who we are</a>
            <a href="../rules-and-regulation-act.php">rules and regulations</a>
            <a href="../constitution-of-authority.php">constitution of authority</a>
          </div>
        </div>
        <div class="dropdown registration">
          <button class="dropbtn">registration</button>
          <div class="dropdown-content">
            <button type="submit"onclick="window.location.href='../download/pdf_download.php?menu=1'">mental health professional registration</button>
             <button type="submit"onclick="window.location.href='../download/pdf_download.php?menu=2'">mental health establishment registration</button
            >
             <button type="submit"onclick="window.location.href='../download/pdf_download.php?menu=3'">forms</button>
             <button type="submit"onclick="window.location.href='../download/pdf_download.php?menu=4'">rules and regulation Act</button>
            <button onclick="window.location.href='../Registration.php'">Registration</button>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn policies">policies</button>
          <div class="dropdown-content">
            <a href="../mental_health_act_2017.php">mental health act,2017</a>
            <a href="../rights_of_persons_with_mental_illness.php">rights of persons with mental illness</a>
            <a href="../Mental-health-review-boards.php">mental health review borders</a>
          </div>
        </div>
        <div class="dropdown meetings">
          <button class="dropbtn" onclick="window.location.href='../meetings_and_minutes_of_meetings.php'">meetings</button>
        </div>
        <div class="dropdown">
          <button class="dropbtn members"><a href="#"> members</a></button>
        </div>
        <div class="dropdown">
          <button class="dropbtn gallery" onclick="window.location.href='../view_images/view-image.php'">gallery</button>
        </div>
        <div class="dropdown">
          <button class="dropbtn cntUs"onclick="window.location.href='../contact_us.php'">contact us</button>
        </div>
        <?php
            // session_start();
            if(isset($_SESSION['userName'])){
       echo" <div class='dropdown'>";
       echo"<button class='dropbtn'"."onclick="."window.location.href='../upload/admin_upload.php'".">admin panel</button>";
       echo"</div>";
      };
      ?>
      <!-- //  onclick="window.location.href='../meetings_and_minutes_of_meetings.php'" -->
        
      </nav>