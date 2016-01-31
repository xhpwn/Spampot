<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>bucket's Honeypot</title>
	<link rel="stylesheet" type="text/css" href="/style.css">
	<style type="text/css">

#honeypot {
	visibility:hidden;
}

input:checked ~ br + #honeypot {
visibility:visible;
}

</style>

</head>

<body>
<h1>bucket's Spampot</h1>
<h2>A delicious honeypot skeleton for spambots</h2>

<form method="post" action="alert.php">
	<center><p><label for="name">Name &nbsp;</label>
	<input type="text" id="name" name="name" placeholder="Name">
	<br>
	<label for="email">Email &nbsp;</label>
	<input type="text" maxlength="50" id="email" name="email" placeholder="Email">
	<br>
	<br>
	<label for="toggle">HoneyPot</label>
	<input type="checkbox" id="toggle">
	<br>
	<input type="text" id="honeypot" name="honeypot" placeholder="Leave Blank If Human" autocomplete="off">
	<br>
	<input type="submit" name="submit" value="Submit" id="submit"></p></center>
</form>

<a href="/info.php"><h3>About Spampot</h3></a>

</body>

</html>
