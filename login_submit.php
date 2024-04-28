<?php
require('connection.inc.php');
require('functions.inc.php');

$email=get_safe_value($con,$_POST['email']);
$password=get_safe_value($con,$_POST['password']);


$res=mysqli_query($con,"SELECT * FROM `users` WHERE email='$email' and password='$password'");

if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$_SESSION['USER_LOGIN']='yes';
	$_SESSION['USER_ID']=$row['id'];
	$_SESSION['USER_NAME']=$row['name'];

	echo 'YES';
	
}
else{
	echo "NO";
}
?>