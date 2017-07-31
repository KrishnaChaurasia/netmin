<html>
	<head><title>UserAdd</title></head>
        <body>
		<center><a href="/index.php">Home</a><br>
		<form name="form" action="" method="POST">
		Username : <input type="text" name="un">
		<br>Password : <input type="password" name="pwd">
		<br><input type="submit" name="sub" value="Submit">
		</form>
		</center>
		
	<?php
		if(isset($_POST['sub']))
			{
				if(empty($_POST['un']) || empty($_POST['pwd'])){
					echo "Fill all the fields!!";
					}
				else{
					$un=$_POST['un'];
					$pass=$_POST['pwd'];
					$o=`cat /etc/passwd | grep -w $un`;
					if($o!=""){
					echo "$un Exists";
					}
					else{
					$o=`sudo /usr/sbin/useradd $un`;
					$o=`sudo touch useradd.sh`;
					$o=`sudo chmod 746 useradd.sh`;
					$o=`echo "echo $pass | passwd --stdin $un" > useradd.sh`;
					$o=`sudo bash useradd.sh`;
					$o=`sudo rm -rf useradd.sh`;
					echo "User added";
					}
				}
			}
	?>
	</body>
</html>
