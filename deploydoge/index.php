<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Deploy Doge - Amaze Tool</title>
			<link rel="stylesheet" href="resources/doge.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="doge">
				<img src="resources/deploydoge.png">
			</div>
			<div class="fields">
				<fieldset>
					<label>MyTestDoge
					<input type="text" id="mytestdoge-sat" placeholder="Passphrase"></label>
					<button data-proj="mytestdoge">Deploy</button>
				</fieldset>
				<fieldset>
					<label>IR-Desktop
					<input type="text" id="irdesktop-sat" placeholder="Passphrase"></label>
					<button data-proj="irdesktop">Deploy</button>
				</fieldset>
				<fieldset>
					<label>gnw-admin
					<input type="text" id="gnw-admin-sat" placeholder="Passphrase"></label>
					<button data-proj="gnw-admin">Deploy</button>
				</fieldset>
			</div>
		</div>
		<script src="resources/doge.js"></script>
	</body>
</html>