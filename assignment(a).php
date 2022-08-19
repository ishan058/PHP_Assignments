<html>
	<head>
		<title>Assignmnet-2(a)</title>
	</head>
	<body>
		<?php
			function evaluate($name,$attendance,$hygiene,$rating)
			{
				if($attendance<80 || $hygiene<50 || $rating<2)
				{
				echo $name ,", You are fired from the Rojan Krina Passal!";
				}
				else
				{
				echo "Not Fired for now";
				}
			}
			$name="ram krishna";
			$attendance=60;
			$gygiene=40;
			$rating=2;
			evaluate($name,$attendance,$hygiene,$rating)
		?>
	</body>
</html>
