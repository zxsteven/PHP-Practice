<!doctype html>
<html>
	<head>
		<title>Webpage</title>

		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<div>
			<?php
				$names = array('Steven', 'Sean', 'John');

				if ($_POST["submit"]) {
				if ($_POST["name"]) {

				foreach ($names as $name) {
				if ($POST[‘name’] == $name) echo “I know you! Your name is “.
				$name;
				$knowYou = 1;
				}
				if (!$knowYou) echo “I don’t know you, “.$name;
				 } else {
				 echo "Please enter your name";
				 }
				}		 	
			?>
		<form method="post">
			<label for="name">Name</label>
			<input name="name" type="text" />
			<input type="submit" name="submit" value="Submit Your Name" />
		</form>
		</div>
	</body>
</html>