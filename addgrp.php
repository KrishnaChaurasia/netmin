<html>
	<head><title>ADD GROUPS</title></head>
        <body>
		<center><a href="/index.php">Home</a>
		<form name="form" method="POST" action="">
		Enter group name : <input type="text" name="grp">
		<input type="submit" name="sub" value="Add group">
		</form>
		</center>
		<?php
		if(isset($_POST['sub']))
			{
			if(empty($_POST['grp'])){
				echo "Fill the field!!";
				}
			else{
				$gn=$_POST['grp'];
				$o=`cat /etc/group | grep -w $gn`;
				if($o!=""){
				echo "$gn Exists";
				}
				else{
				$o=`sudo /usr/sbin/groupadd $gn`;	
				echo "Group added";
				}
			}
		}
	?>
	

</body>
</html>
