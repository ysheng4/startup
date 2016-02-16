<?php 
session_start();
include('connect.php');

$username=$_POST['pusername'];
$password=$_POST['ppassword'];
$username = stripslashes($username);
$sql="SELECT * FROM members WHERE username='$username' and password='$password'";
$result=mysqli_query($connect,$sql);
$count=mysqli_num_rows($result);
$result_arr=array();
//$error='';
if($count==1){
$_SESSION['login']='login';
while($r=mysqli_fetch_assoc($result)){
	$result_arr['username']=$r['username'];
	$_SESSION['username']=$r['username'];
	$result_arr['password']=$r['password'];
	$result_arr['login']=$_SESSION['login'];
	$result_arr['error']='';
}
}else{
	
	$result_arr['error']='用户名或密码错误';
}

echo json_encode($result_arr); 

?>

        