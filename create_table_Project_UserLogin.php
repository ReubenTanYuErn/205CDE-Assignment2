<html>
<body>
<?php

if ($dbc = @mysql_connect('localhost','root', ''))
	
{
	print '<p>Successfully connected to MySQL!</p>';
	if(@mysql_query('CREATE DATABASE Project_UserLogin'))
	{
		print '<p>The database has been created!</p>';
	}
	else
	{
		print '<p style = "color: red;">Could not create the database because:
		<br />' . mysql_error() . '.</p>';
	}
	mysql_close();
}

else
{
	print '<p style = "color: red;">Could not connect to MySql: '.mysql_error().'</p>';
}
?>
</body>
</html>