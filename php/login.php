<?php  

$path = mysqli_connect("localhost", "root", "", "imbs_web_project");

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "select * from register_info where email='$email' and nic='$password'";

$result = mysqli_query($path,$sql);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if($count==1) {
	echo 	'<div class="pop_up">
                    <div class="pop_up_box">
                         <div class="title">Login Successful..!</div>
                         <div class="icon"><i class="fa-regular fa-circle-check"></i></div>
                         <a href="../login.html">Go Back</a>
                    </div>
               </div>';
}
else {
	echo 	'<div class="login_pop_up">
          		<div class="login_pop_up_box">
               		<div class="title">Invalid Username or Password</div>
               		<div class="icon"><i class="fa-regular fa-circle-xmark"></i></div>
               		<a href="../login.html">Go Back</a>
          		</div>
     		</div>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    	<link rel="stylesheet" href="../css/style.css">
    	<title>IMBS LOGIN</title>
</head>
<body>

</body>
</html>