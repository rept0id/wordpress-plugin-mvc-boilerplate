<?php
	 
	function tplAdmin($options) {

		print <<<END
			<!DOCTYPE html>
			<html lang="en">

				<head>
					<meta charset="UTF-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

				</head>

				<body>
					<form action="?page=cookieplate" method="post">
						<label>Check the box if you want to keep the cookies</label>
						<input name="settingsCookie" id='cookie-btn' type='checkbox'{$options->settingsCookieChecked}/>
						<input name="submit" type="submit" />
					</form>
				</body>

			</html>
		END;

	}