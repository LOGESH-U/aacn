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
    <style>
     .clearBoth{
       margin-top: 10rem;
     }
    </style>
  </head>
  <body>
    <div class="vh">
      <?php
      require_once('./php_files/top_header.php');
      require_once('./php_files/nav_header.php');
      ?>
      <section id="headerBanner">
        <div class="bgimage"></div>
        <div class="headerBannerMsg">
          <p class="headerBannerMsgBold">
            We provide access to information on the licensing process,Mental
            Health-related legislation, Facts about mental health facilities,
            etc in the state.
          </p>
          <p>
            Application forms required for licensing of Psychiatric hospitals,
            forms required under the Mental Health Act, etc can be accessed from
            the website.
          </p>
          <div class="headerBannerBtn">
            <button
              id="registerBtn"
              onclick="window.location.href='Registration.php'"
              class="btn"
            >
              Register Now
              <!-- <a href="Registration.html">Register Now</a> -->
            </button>
            <button id="contactBtn" class="btn" onclick="window.location.href='contact_us.php'">Contact Us</button>
          </div>
        </div>
      </section>
    </div>
    <div class="clearBoth"></div>
    <section id="aboutUs">
      <div class="imgAboutUs"></div>
      <div class="aboutUsMsg">
        <p class="aboutUsHeading">about us</p>
        <p class="aboutUsMsgBold">
          In 1994 the State Mental Health Authority Tamil Nadu (SMHA-TN) was
          formed as a statutory body under section 4 of the Mental Health Act,
          1987.
        </p>
        <p>
          It is functioning under the superintendence, direction, and control of
          the Government of Tamil Nadu. Pursuant to the enactment of the Mental
          Healthcare Act,2017, the Authority has been reconstituted with the
          Principal Secretary to Government, Health & Family Welfare Department
          being its chairperson and officials and non-officials being the
          members of the Authority.
        </p>
        <p>
          This website is an effort to highlight some of the mental
          health-related activities in the state. It will provide access to
          information on the licensing process, Mental Health-related
          legislation, Facts about mental health facilities, etc in the state.
          Application forms required for licensing of Psychiatric hospitals,
          forms required under the Mental Health Act, etc can be accessed from
          the website.
        </p>
      </div>
    </section>
    <div class="clearBoth"></div>
    <section id="docterSection">
      <div class="drImage">
        <img src="images/dr.jpg" alt="Dr.J.Radhakrishnan Photo" />
      </div>
      <div class="drDetails">
        <p class="drName">Dr.J.Radhakrishnan,IAS</p>
        <p class="drMsg">
          Chairperson, Tamil Nadu State Mental Health Authority <br />
          Principal Secretary to Government Health and Family <br />
          Welfare Department Government of Tamil Nadu
        </p>
      </div>
    </section>
    <div class="clearBoth"></div>
    <?php 
    require_once('./php_files/contact_us.php');
    echo"<br /><br /><br />";
    require_once('./php_files/footer.php');
    ?>
    <script
      src="https://kit.fontawesome.com/aac9d035bc.js"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
