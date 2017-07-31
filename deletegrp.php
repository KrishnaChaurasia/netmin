<html>
	<head><title>DeleteGroup</title></head>
        <body>
		<center><a href="/index.php">Home</a>
		<form name="form" action="" method="POST">
		Enter group name : <input type="text" name="gn">
		<br><input type="submit" name="sub" value="Submit">
		</form>
		</center>
		
	<?php
		if(isset($_POST['sub']))
			{
				if(empty($_POST['gn'])){
					echo "Fill the field!!";
					}
				else{
					$gn=$_POST['gn'];
					$o=`cat /etc/group | grep -w $gn`;
					if($o=" "){
					echo "$gn does not exist";
					}
					else{
					$o=`sudo /usr/sbin/groupdel $gn`;
					echo "Group deleted successfully";
					}	
				}
			}
	?>
	</body>
</html>
