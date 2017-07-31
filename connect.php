<html>
	<head><title>CONNECTION STATUS</title></head>
        <body>
		<center><a href="/index.php">Home</a>
		<form name="form" action="" method="POST">
		Enter I.P. : <input type="text" name="ip">
		<input type="submit" name="sub" value="PING">
		</form>
		</center>
		
			<?php
			if(isset($_POST['sub']))
				{
					if(empty($_POST['ip']))
					{
					echo "Fill the field!!";
					}
					else{
					$ip=$_POST['ip'];
					$out=`ping -c 4 $ip`;
					echo "<pre>$out</pre>";
					}
				}
			?>
</body>
</html>	


	</body>
</html>
