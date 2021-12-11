<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .bodyPart{
           background-color:#FFF;
        }
        .center a{
        text-decoration: none;
        text-transform: capitalize;
        color:#1d1d1d;
        }
        .fa-file-pdf{
            color:red;
        }
        p{
        font-weight:500;
        text-transform:uppercase;
        }
        .header,.tableData{
            border: 1px solid #1d1d1d;
        }
        .header{
            text-transform: uppercase;
            padding:1.4rem;
            width: 400px;
        }
        .tableData{
            text-transform: capitalize;
            padding: 1rem;
        }
        .one,.three{
            text-align: center;
        }
        .two{
            width: 280px;
        }
        .pdfTable{
            margin: 0 auto;
        }
    </style>
</head>
<body class="bodyPart">
<?php
require_once('../php_files/databaseConnection.php');
require_once('../php_files/top_header.php');
require_once('../php_files/nav_header.php');

$menu=$_REQUEST['menu'];
if($menu==1){
    $deportment="mental_health_professional_registration";
}elseif($menu==2){
    $deportment="mental_health_establishment_registration";
}elseif($menu==3){
    $deportment="forms";

}elseif($menu==4){
    $deportment="rules_and_regulation_act";
}
    $sqlQuery="SELECT * FROM pdf_details WHERE deportment= '$deportment' ";
    $outPut=mysqli_query($connection,$sqlQuery);
    $totalRow=mysqli_num_rows($outPut);
    $count=1;
    if($totalRow>0){
        echo" <table class='pdfTable'>";
            echo"<tr>";
                echo"<th colspan='3' class='header'>$deportment</th>";
            echo"</tr>";
            while($displayAll=mysqli_fetch_assoc($outPut)){             
            echo"<tr>";
                echo"<td class='tableData one'>".$count++."</td></br>";
                echo" <td class='tableData two'>".$displayAll['description']."</td>";
                echo"<td class='tableData three'><a href='../upload/pdfuploads/".$displayAll['file_name']."' target='_blank'><i class='fas fa-file-pdf'></i></a> </td>";
            echo"</tr>";             
            }     
        echo"</table>";                     
    };
?>

 <script
      src="https://kit.fontawesome.com/aac9d035bc.js"
      crossorigin="anonymous"
    ></script>
</body>
</html>