<link rel="stylesheet" href="../css/about_us.css">
<style>
    input{
        padding:1rem;
        background-color: var(--main);
        color:#fff;
        border:none;
        width:150px;
        font-size:1.6rem;
        cursor: pointer;
    }
</style>

<?php
      require_once('./php_files/top_header.php');
      require_once('./php_files/nav_header.php');
      ?>
 <div class="bg_color">

<div id="tnsmha">
<div class="tnsmha_header"> about tnsmha <hr></div>
    <div class="tnsmha_msg">
        <div class="tnsmha_image"> <img src="../images/logo.jpg" alt=""></div>
        <div class="tnsmha_para">
            <p>
            This is the official web site of Tamil Nadu State Mental Health Authority. In 1994 the State Mental Health Authority Tamil Nadu (SMHA-TN) was formed as a statutory body under section 4 of the Mental Health Act, 1987.It is functioning under the superintendence, direction and control of the Government of Tamil Nadu.Pursuant to the enactment of Mental Healthcare Act,2017, the Authoity has been reconstituted with the Principal Secretary to Government, Health & Family Welfare Department being  its chairperson and  officials and non-officials being the members of the Authority. 
            </p>
            <input type="button" value="Read More" onclick="window.location.href='who_we_are.php'">

        </div>
    </div>
</div>
</div>
 <?php 
 echo'<br>';
 echo'<br>';
 require_once('./php_files/contact_us.php');
 echo'<br>';
 echo'<br>';
 
 require_once('./php_files/footer.php')
 ?>