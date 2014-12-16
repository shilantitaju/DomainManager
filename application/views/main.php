<?php require_once 'header.php';?>
<h1>Hi,
<?php 
foreach ($record as $row)
{
	echo $row->User_name;
}
?> 
<br>

You are now Logged in</h1>
<?php require_once 'footer.php';