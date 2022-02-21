<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$sql = "select * from newuser where UserEmail='$email'";
	$re=mysqli_query($conn ,$sql);
	while($row1 = $re->fetch_assoc()) {
		$pa=$row1["UserPw"];
	}
	if($_POST['password']==$pa){
		header("Location:farmer.php?fid=$id");
	}
	else{
		header("Location:login.php?message=Password is wrong");
	}
}

?>
