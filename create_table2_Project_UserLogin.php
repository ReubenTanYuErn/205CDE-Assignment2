<html>
<body>
<?php

if ($dbc = @mysql_connect('localhost', 'root', ''))
{
	if(!@mysql_select_db('project_userlogin'))
	{
		print '<p style = "color: red;"> Could not select the database because:<br/>' .mysql_error(). '.</p>';
		mysql_close();
		$dbc = FALSE;
	}
}
	else
	{
		print '<p style = "color: red;"> Could not connect to MySql:<br />'. mysql_error() .'.</p>';
	}

if($dbc)
{
	$query = 'CREATE TABLE entries
	(
		entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		user_id VARCHAR(50) NOT NULL,
		email VARCHAR(50) NOT NULL,
		password VARCHAR(50) NOT NULL,
		data_entered DATETIME NOT NULL
	)';
	
	if (@mysql_query($query))
	{
		print '<p>The table has been created.</p>';
	}
	else
	{
		print '<p style = "color: red;">Could not create the table because:<br />'. mysql_error( ).'
		.</p><p>The query being run was: '.$query. '</p>';
	}
mysql_close( );
}
?>
</body>
</html>