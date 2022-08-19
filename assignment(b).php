<html>
	<head>
		<title>Assignmnet-2(b)</title>
	</head>
	<body>
		<?php
		  	function evaluate($name,$attendance,$hygiene,$rating)
		  	{
		    	if($attendance<80 && $hygiene<50 && $rating<2)
		    	{
		       		echo $name ,", You are fired from the Rojan Krina Passal!";
		    	}
		    	else
		    	{
		        	echo "Not Fired for now";
		    	}
		  	}
			$name="Kusal Karki";
			$attendance=40;
			$hygiene=20;
			$rating=0;
			evaluate($Name,$Attendance,$Hygiene,$Rating)  
		?>
	</body>
</html>
