<html>
	<head><title>HTTP</title></head>
        <body>
		<center><a href="/index.php">Home</a><br>HTTP Management
		<form name="form" action="" method="POST">
		<input type="submit" name="sub1" value="START">
		<input type="submit" name="sub2" value="STOP">
		<input type="submit" name="sub3" value="STATUS">
		<input type="submit" name="sub4" value="RESTART">
		</form></center>
	
	<?php 
		if(isset($_POST['sub1'])){
			$x=`sudo /etc/init.d/httpd start`;
			echo $x;
		}

		if(isset($_POST['sub2'])){
			$x=`sudo /etc/init.d/httpd stop`;
			echo $x;
		}
		if(isset($_POST['sub3'])){
			$x=`sudo /etc/init.d/httpd status`;
			echo $x;
		}
		if(isset($_POST['sub4'])){
			$x=`sudo /etc/init.d/httpd restart`;
			echo $x;
		}	?>
	</body>
</html>
