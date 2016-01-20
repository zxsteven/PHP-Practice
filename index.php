<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>

	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content='text/html; charset=utf-8' />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>

	<?php
		$emailTo = '0teachsteve@gmail.com';
		$subject = 'Hope it works.';
		$body = "You're super extra cool!";
		$headers = "From: breathesteve@gmail.com";

		mail($emailTo, $subject, $body, $headers);

	?>

</body>
</html>