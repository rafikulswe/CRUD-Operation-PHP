<?php
    require_once('config.php');
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
<h4>Data Retrive</h4>
<a href="index.php">Add Again</a>
<hr>
	<table>
		<thead>
			<td>Name</td>
			<td>Email</td>
			<td>Username</td>
		</thead>
		<?php
			$sel="select * from users order by id desc";
			$qry=mysqli_query($con,$sel);
			while($data=mysqli_fetch_array($qry)){
		?>
		<tr>
			<td><?=$data['name'];?></td>
			<td><?=$data['email'];?></td>
			<td><?=$data['username'];?></td>
		</tr>
		<?php }?>
	</table>
</div>

</body>
</html>