<?php
	require_once('config.php');


    if(isset($_POST['send'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=md5($_POST['password']);

		if((empty($username))||(empty($password))||(empty($name))){
		 	echo"please fill up the required fields!!";
 			exit();
			}
		 else{
		$insert="INSERT INTO users(name,email,username,password)VALUES('$name','$email','$username','$password')";
		$qry=mysqli_query($con,$insert);
		if($qry){
			echo "user insert Successfull.";
			header('Location: datalist.php');
			}
			else{
				 echo "user insert Failed!!";
				}
		 }
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
		background:;

	}
	.main{
		text-align:center;
		height: 500px;
		width: 500px;
		border: 1px solid grey;
	}
	.form{
		padding-top: 10px;
	}
</style>
<body>
<div class="main">
	<form class="form" method="post" action="">
		<label>Name:</label>
		<input type="text" name="name"></input><br><br>
		<label>Email:</label>
		<input type="email" name="email"></input><br><br>
		<label>Username:</label>
		<input type="text" name="username"></input><br><br>
		<label>Password:</label>
		<input type="password" name="password"></input><br><br>
		<button type="submit" name="send">Submit</button>
	</form>
</div>

</body>
</html>