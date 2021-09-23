<?php
$con = mysqli_connect('103.21.58.5:3306','shrily6m' 'xAa082z?');

if($con){
		echo "connection successful";
}
else{
		echo "No Connection";
}

mysqli_select_db($con,'shrily6m_');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$commnet=$_POST['comment'];

$query =" insert into userinfo (user,email,mobile,comment)
values ('$user','$email','$mobile','$commnet',)";

mysqli_query($con,$query);


?>