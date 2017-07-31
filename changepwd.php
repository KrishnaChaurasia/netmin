<html>
	<head><title>ChangePassword</title></head>
        <body>
		<center><a href="/index.php">Home</a>
		<form name="form" action="" method="POST">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Username :   <input type="text" name="un">
		<br>New Password : <input type="password" name="pwd">
		<br><input type="submit" name="sub" value="Change Password">
		</form>
		</center>
		
	<?php
		if(isset($_POST['sub']))
			{
				if(empty($_POST['un']) || empty($_POST['pwd']))				{
					echo "Fill the field!!";
					}
				else{
					$un=$_POST['un'];
					$pass=$_POST['pwd'];
					$o=`cat /etc/passwd | grep -w $un`;
					if($o==""){
					echo "$un does not exist";
					}
					else{
					$o=`sudo touch useradd.sh`;
					$o=`sudo chmod 746 useradd.sh`;
					$o=`echo "echo $pass | passwd --stdin $un" > useradd.sh`;
					$o=`sudo bash useradd.sh`;
					$o=`sudo rm -rf useradd.sh`;
					echo "Password changed successfully";
					}
				}
			}
	?>
	</body>
</html>
