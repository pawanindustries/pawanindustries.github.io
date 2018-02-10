<html>
<head>
<title>Authority</title>
<script>
var user="admin";
var pass="admin";
username=prompt('Username');
password=prompt('Password');
if(username==user && password==pass)
{
	alert("Hello Admin");
	window.location="admin-login.php"
}
else
{
	alert("Wrong Username or Password");
	window.location="index.php"
}
</script>
</head>
<body></body>
</html>