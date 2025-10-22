<?php  

$path = mysqli_connect("localhost", "root", "", "imbs_web_project");

$nic = $_REQUEST['nic'];

$sql = "delete from register_info where nic='$nic'";

if(ISSET($_POST['delete'])) {
     if(mysqli_query($path,$sql)) {
          echo '<div class="pop_up">
                    <div class="login_pop_up_box">
                         <div class="title">Your Details Deleted Successful..!</div>
                         <div class="icon"><i class="fa-regular fa-circle-check"></i></div>
                         <a href="../delete.html">Go Back</a>
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
     <title>IMBS Delete Your Details</title>
</head>
<body></body>
</html>