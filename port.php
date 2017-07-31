<html>
	<head><title>PORT STATUS</title></head>
        <body><a href="/index.php">Home</a><br>
		<?php
			$out=`sudo nmap localhost`;
			echo "<pre>$out</pre>";
			?>
	</body>
</html>
