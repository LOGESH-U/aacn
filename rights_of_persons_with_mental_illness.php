<link rel="stylesheet" href="../css/meetings.css">
<style>
    input{
        padding: 1.3rem;
        font-size:1.7rem;
        background-color: var(--main);
        border:none;
        cursor: pointer;
    }
    input:hover{
        color:#FFF
    }
    .bg{
        padding-top:3rem;
    }
    .heading{
        width: 450px;
    }
</style>
<?php
      require_once('./php_files/top_header.php');
      require_once('./php_files/nav_header.php');


?>
<div class="bg">
    <div class="meetingsBody">
        <div class="heading">RIGHTS OF PERSONS WITH MENTAL ILLNESS</div>
<div class="msg">The central Government have enacted  rules called the Mental Healthcare (Rights of Persons with Mental Illness) Rules, 2018.</div>
<p style="margin-bottom:5rem">Copy of the act is available on the egazette in the following:</p>

<input type="button" value="Click Here To View/Download" onclick="window.open('../source/rights_of_persons_with_mental_illness.pdf')">
    </div>
    <?php 
 
 echo'<p style="margin-top:10rem"></p>';
 require_once('./php_files/contact_us.php');
 echo'<br>';
 echo'<br>';
 require_once('./php_files/footer.php')
 ?>
</div>
