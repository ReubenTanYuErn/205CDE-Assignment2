<?php

$cm = $_POST['cm'];
$year = $_POST['year'];
$mk = $_POST['mk'];
$cc = $_POST['cc'];
$mph = $_POST['mph'];
$price = $_POST['price'];
$comment = nl2br($_POST['comment']);


print "<div><table border='1' cellspacing='0' cellpadding='10' align='center'>
<tr><td>Car Model</td><td>$cm</td></tr>
<tr><td>Year</td><td>$year</td></tr>
<tr><td>Make</td><td>$mk</td></tr>
<tr><td>Engine (CC)</td><td>$cc</td></tr>
<tr><td>0-60mph</td><td>$mph</td></tr>
<tr><td>Price</td><td>$price</td></tr>
<tr><td>Comments</td><td>$comment</td></tr></div>";
?>