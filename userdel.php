<html>
	<head><title>UserDelete</title></head>
        <body>
		<center><a href="/index.php">Home</a><br>
		<form name="form" action="" method="POST">
		Username : <input type="text" name="un">
		<br><input type="submit" name="sub" value="Delete">
		</form>
		</center>
		
	<?php
		if(isset($_POST['sub']))
			{
				if(empty($_POST['un'])){
					echo "Fill the field!!";
					}
				else{
				$un=$_POST['un'];
				$o=`cat /etc/passwd | grep -w $un`;
				if($o==""){
				echo "$un does not exists";
				}
				else{
				$o=`sudo /usr/sbin/userdel -r $un`;
				echo "User Deleted";
				}
				}
			}
	?>
	</body>
</html>
