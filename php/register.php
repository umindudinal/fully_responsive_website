<?php  

$path = mysqli_connect("localhost", "root", "", "imbs_web_project");

$firstName = $_REQUEST['first_name'];
$lastName = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$nic = $_REQUEST['nic'];
$mobileNumber = $_REQUEST['mobile_number'];
$gender = $_REQUEST['gender'];
$dob = $_REQUEST['dob'];
$address = $_REQUEST['address'];
$district = $_REQUEST['district'];
$courses = $_REQUEST['courses'];

$sql = "insert into register_info values ('$firstName', '$lastName', '$email', '$nic', '$mobileNumber', '$gender', '$dob', '$address', '$district', '$courses')";

if(ISSET($_POST['register'])) {
     if(mysqli_query($path,$sql)) {
          echo '<div class="pop_up">
                    <div class="pop_up_box">
                         <div class="title">Registration Successful..!</div>
                         <div class="icon"><i class="fa-regular fa-circle-check"></i></div>
                         <a href="../register.html">Go Back</a>
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
     <title>IMBS REGISTRATION</title>
</head>
<body>
     
</body>
</html>