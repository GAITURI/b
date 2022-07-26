<?php
//list all variables
$passwordlog="";
$result="";
$num="";
$emaillog="";
session_start();
$conn = mysqli_connect('localhost','root','','schooldata');

//capture input
if(isset($_POST['login_button'])){
	$emaillog=$_POST['emaillog'];
	$passwordlog=$_POST['[passlog'];

}
//create the sql query to fetch data
$sql="SELECT *FROM schoolaccounts WHERE email='$emaillog'&& password= '".md5($password)."'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

//logic to check users
if ($num==1) {
	# code...
	$_SESSION[
		'active user']=$username;
		header('location:signup.php');	
}else{
	header('location:login.php');
}
?>