<html>
<head>
	<title>Test</title>
	<!--<script defer src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>-->
	<script defer src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.js"></script>
	<script defer src="./source/main.js"></script>
</head>

<body>
	<h1>
		Hello World
	</h1>

	<form id="login_form">
		<label for="username">User:</label><br>
		<input type="text" id="username" name="username"><br>
		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password"><br>
		<input type="button" id="login_button" value="Login">
	</form>

	<form id="verify_form">
		<input type="button" id="verify_button" value="Verify">
	</form>
</body>
</html>
