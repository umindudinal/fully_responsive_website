<?php  

$path = mysqli_connect("localhost", "root", "", "imbs_web_project");

$nic = $_REQUEST['nic'];
$mobileNumber = $_REQUEST['mobile_number'];
$address = $_REQUEST['address'];
$district = $_REQUEST['district'];
$courses = $_REQUEST['courses'];

$sql = "update register_info set mobile_number='$mobileNumber', address='$address', district='$district', courses='$courses' where nic='$nic'";

if(ISSET($_POST['update'])) {
     if(mysqli_query($path,$sql)) {
          echo '<div class="pop_up">
                    <div class="pop_up_box">
                         <div class="title">Your Details Updated Successful..!</div>
                         <div class="icon"><i class="fa-regular fa-circle-check"></i></div>
                         <a href="../update.html">Go Back</a>
                    </div>
               </div>';
     }
}

?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
     <link rel="stylesheet" href="../css/style.css">
     <title>IMBS Update Your Details</title>
</head>
<body></body>
</html>